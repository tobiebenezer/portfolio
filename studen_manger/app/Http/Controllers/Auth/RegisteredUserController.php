<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'mid_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'phone' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile_image' => ['nullable', 'image', 'max:1024'],
        ]);
        
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $filepath = $image->move(public_path('profile_img'), $imageName);
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'mid_name' => $request->mid_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'school_mail' => strtolower($request->first_name.'.'.$request->mid_name.'.'.$request->last_name).'@uct.ac.com',
            'phone' => $request->phone,
            'matric_number' => 'MAT/'.strtoupper(substr($request->first_name, 0, 1)).'/'.date('y'),
            'type' => $request->type,
            'password' => Hash::make($request->password),
            'profile_picture' => $filepath ? "storage/{$filepath}" : null,
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

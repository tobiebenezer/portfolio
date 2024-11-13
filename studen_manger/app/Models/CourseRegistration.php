<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_id',
        'semester',
        'course_id',
        'session',
    ];

    /**
     * Get the course associated with the registration.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get the user associated with the registration.
     */
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}

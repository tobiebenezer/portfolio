<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['John', 'Doe', 'john@mail.com', 'john@uct.ac.com', 'MAT1234567', 'student'],
            ['Jane', 'Doe', 'jane.doe@example.com', 'jane.doe@uct.ac.com', 'MAT1234568', 'student'],
            ['Jim', 'Beam', 'jim.beam@example.com', 'jim.beam@uct.ac.com', 'MAT1234569', 'student'],
            ['Jack', 'Daniels', 'jack.daniels@example.com', 'jack.daniels@uct.ac.com', 'MAT1234570', 'student'],
            ['Jill', 'Valentine', 'staff@mail.com', 'staff@uct.ac.com', 'MAT1234571', 'staff']
        ];

        foreach ($users as $user) {
            User::insert([
                'first_name' => $user[0],
                'last_name' => $user[1],
                'email' => $user[2],
                'school_mail' => $user[3],
                'password' => bcrypt('12345678'),
                'matric_number' => $user[4],
                'type' => $user[5]
            ]);
        }
    }
}

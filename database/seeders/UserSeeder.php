<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'James',
                'email' => 'james@gmail.com',
                'password' => bcrypt(12345678),
                'role' => 'student'
            ],
            [
                'name' => 'Rob',
                'email' => 'rob@gmail.com',
                'password' => bcrypt(12345678),
                'role' => 'instructor'
            ]
        ];

        User::insert($users);
    }
}

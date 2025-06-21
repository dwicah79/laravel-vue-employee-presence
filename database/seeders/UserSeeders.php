<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Dwi Cahyo Nugroho',
                'email' => 'dwilangitwibawa@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Employee',
                'email' => 'employee@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ]
        ];

        foreach ($user as $users) {
            User::create([
                'name' => $users['name'],
                'email' => $users['email'],
                'email_verified_at' => $users['email_verified_at'],
                'password' => $users['password'],
                'role' => 'employee',
            ]);
        }
    }
}

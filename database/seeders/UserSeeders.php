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
            'name' => 'Dwi Cahyo Nugroho',
            'email' => 'dwilangitwibawa@gmail.com',
            'password' => Hash::make('password'),
        ];

        User::create(($user));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Menambah beberapa akun pengguna secara manual
        User::create([
            'name' => 'Admin',
            'email' => 'admin@cunnet.com',
            'password' => Hash::make('password123'), // Jangan lupa hash password
            'role' => 'admin', // Bisa sesuaikan dengan role di sistem Anda
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@cunnet.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);

        // Anda bisa menambahkan lebih banyak akun di sini
    }
}

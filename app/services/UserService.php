<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    // Menyimpan pengguna baru
    public function createUser(array $data)
    {
        // Validasi sudah dilakukan di controller
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
    }

    // Mengambil semua pengguna
    public function getAllUsers()
    {
        return User::paginate(10); // Menggunakan paginate di query builder
    }

    // Mengupdate pengguna
    public function updateUser(User $user, array $data)
    {
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
        ]);
    }

    // Menghapus pengguna
    public function deleteUser(User $user)
    {
        $user->delete();
    }
}

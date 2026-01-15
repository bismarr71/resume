<?php

namespace App\Http\Controllers\Admin;

use App\Services\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    // Menampilkan daftar pengguna dengan pagination
    public function index()
    {
        $users = $this->userService->getAllUsers(); // Sekarang mendapatkan data dengan pagination
        return view('admin.users.index', compact('users'));
    }

    // Menampilkan halaman tambah pengguna
    public function create()
    {
        return view('admin.users.create');
    }

    // Menyimpan pengguna baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required|string',
        ]);

        $this->userService->createUser($validated);

        return redirect()->route('admin.users.index');
    }

    // Menampilkan halaman edit pengguna
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Mengupdate pengguna
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'role' => 'required|string',
        ]);

        $this->userService->updateUser($user, $validated);

        return redirect()->route('admin.users.index');
    }

    // Menghapus pengguna
    public function destroy(User $user)
    {
        $this->userService->deleteUser($user);

        return redirect()->route('admin.users.index');
    }
}

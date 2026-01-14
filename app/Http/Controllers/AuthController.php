<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function loginView()
    {
        return view('admin.auth.login'); // Sesuaikan dengan folder view kamu
    }

    // Proses login
    public function loginPost(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cek login (Remember me aktif)
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            // Jika berhasil, lempar ke Dashboard Admin
            return redirect()->intended('/admin/dashboard');
        }

        // Jika gagal, balikkan dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}

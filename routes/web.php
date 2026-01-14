<?php

use Illuminate\Support\Facades\Route;
// Import controller dengan namespace BARU
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\AuthController;

// Jalur Login
Route::get('/admin/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/admin/login', [AuthController::class, 'loginPost']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Proteksi Dashboard Admin
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // File utama admin kamu
    })->name('admin.dashboard');

    // Nanti menu General Setting, Portfolio, dll ditaruh di sini
});

// 1. Route untuk Halaman Depan (Front)
Route::get('/', [FrontController::class, 'index'])->name('front.home');

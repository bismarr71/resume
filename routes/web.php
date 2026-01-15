<?php

use Illuminate\Support\Facades\Route;
// Import controller dengan namespace BARU
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\AuthController;

// Jalur Login
Route::get('/admin/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/admin/login', [AuthController::class, 'loginPost']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Proteksi Dashboard Admin
Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard'); // File utama admin kamu
        })->name('admin.dashboard');

        // Rute untuk Manajemen Pengguna
        Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('users', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('users/{user}', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete('users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
        Route::get('users/{user}', [UserController::class, 'show'])->name('admin.users.show');

        // Rute untuk General Settings
        Route::get('/settings', function () {
            return view('admin.settings.index'); // Halaman Pengaturan Umum
        })->name('admin.settings');

        // Rute untuk Portfolio
        Route::get('/portfolio', function () {
            return view('admin.portfolio.index'); // Halaman Portfolio
        })->name('admin.portfolio');

        // Rute lainnya (contoh)
        Route::get('/projects', function () {
            return view('admin.projects.index'); // Halaman Projects
        })->name('admin.projects');

        // Nanti menu General Setting, Portfolio, dll ditaruh di sini
    });

// 1. Route untuk Halaman Depan (Front)
Route::get('/', [FrontController::class, 'index'])->name('front.home');

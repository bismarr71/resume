<?php

namespace App\Services;

class DashboardService
{
    /**
     * Logic untuk mengambil semua data yang dibutuhkan Dashboard
     */
    public function getDashboardStats()
    {
        // CONTOH LOGIC:
        // Di sini nanti tempat kamu query database yang rumit-rumit.
        // Misal: $totalUsers = User::where('active', 1)->count();

        // Untuk sekarang kita pakai data dummy dulu ya:
        return [
            'total_users' => 12500,
            'active_now'  => 450,
            'sales_today' => 'Rp 2.500.000',
            'page_title'  => 'Dashboard Admin'
        ];
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DashboardService; // <--- Panggil Service yang tadi dibuat

class AdminController extends Controller
{
    protected $dashboardService;

    // Inject Service lewat Constructor
    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function dashboard()
    {
        // 1. Minta data ke Service
        $data = $this->dashboardService->getDashboardStats();

        // 2. Lempar data ke View
        // File view ada di: resources/views/admin/dashboard.blade.php
        return view('admin.dashboard', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // Ini akan memanggil file resources/views/front/home.blade.php
        return view('front.home');
    }
}

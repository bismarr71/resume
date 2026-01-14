<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // File view ada di: resources/views/front/home.blade.php
        return view('front.home');
    }
}

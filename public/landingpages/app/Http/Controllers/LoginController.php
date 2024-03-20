<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // Logika untuk menampilkan halaman login
        return view('login');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Method untuk menampilkan "Halaman Profil"
    public function index()
{
    
    return view('about');

    }
}
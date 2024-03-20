<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Method untuk menampilkan halaman "Hubungi Kami"
    
    public function index()
{
    
    return view('contact');

    }
}
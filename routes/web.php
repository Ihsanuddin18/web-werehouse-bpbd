<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan "Halaman Profil"
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Route untuk menampilkan halaman "Hubungi Kami"
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route untuk menampilkan halaman dashboard setelah autentikasi login berhasil 
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route untuk menampilkan fitur profile
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

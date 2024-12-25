<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rute untuk Registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Rute untuk Login dan Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware untuk halaman yang hanya bisa diakses oleh pengguna yang login
Route::middleware(['auth'])->group(function () {
    // Rute untuk Artikel
    Route::resource('articles', ArticleController::class);

    // Rute untuk Feedback
    Route::get('feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
    Route::post('feedback', [FeedbackController::class, 'store'])->name('feedback.store');
});

// Middleware khusus role counselor
Route::middleware(['auth', 'role:counselor'])->group(function () {
    Route::resource('appointments', AppointmentController::class);
});

// Halaman Tambahan
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;



// Root Route
Route::get('/', function () {
    return view('posts.index');
});

// User Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// User login
Route::get('/login', [LoginController::class, 'showLOginForm']);
Route::post('/login', [LoginController::class, 'login']);

// User logout
Route::get('/logout', [LoginController::class, 'logout']);


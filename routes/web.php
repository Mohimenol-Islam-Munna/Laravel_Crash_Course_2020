<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;



// Root Route
Route::get('/', function () {
    return view('home');
});


// User Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// User login
Route::get('/login', [LoginController::class, 'showLOginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

// User logout
Route::post('/logout', [LogoutController::class, 'logout']);


// posts
Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

Route::post('/like/{id}', [LikeController::class, 'store']);
Route::post('/unlike/{id}', [LikeController::class, 'destroy']);


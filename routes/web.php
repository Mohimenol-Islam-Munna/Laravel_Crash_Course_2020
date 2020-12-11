<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlayerController;

// Root Route
Route::get('/', function () {
    return view('home');
});

// home
Route::get('/posts', function () {
    return view('posts.index');
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


// Database Practice

    Route::get('/players', function(){

        return view('players.playerHome');
    });
    //  Query builder

    // Create
    Route::get('add/player', [PlayerController::class, 'showRegisterForm'])->name('add/player');

    Route::post('add/player', [PlayerController::class, 'store'])->name('add/player');



    // Read
    Route::get('show/all/player', [PlayerController::class, 'index'])->name('show/all/player');

    Route::get('show/player/{id}', [PlayerController::class, 'show']);




    // Update
    Route::get('update/player/{id}', [PlayerController::class, 'updateForm']);
    Route::post('update/player/{id}', [PlayerController::class, 'updateStore']);


    // Delete
    Route::get('delete/player/{id}', [PlayerController::class, 'delete']);



    //  Eloquent ORM

    // Create
    // Read
    // Update
    // Delete


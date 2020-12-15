<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){

        return view('dashboard');

    }

    public function mbinding(User $user){

        return view('dashboard', compact('user', $user) );

    }
}

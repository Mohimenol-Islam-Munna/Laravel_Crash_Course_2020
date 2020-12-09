<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLOginForm(){

        return view('auth.login');
    }

    public function login(Request $request){


        $data = array();

        $data['email'] = $request->email;
        $data['password'] = $request->password;

        auth()->attempt($request->only('email', 'password'));


        return redirect()->route('dashboard');
    }


    public function logout(Request $request){

        auth()->logout();

        return redirect('/');

    }
}

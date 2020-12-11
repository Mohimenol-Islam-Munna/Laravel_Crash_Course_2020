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



        // validation
        $validation = $request->validate([

            'email' => 'required|email',
            'password' => 'required',

        ]);

        // collect form data
        $data = array();

        $data['email'] = $request->email;
        $data['password'] = $request->password;

        // login functionality
        $login_data = auth()->attempt($request->only('email', 'password'), $request->rememberme);

        // check login success or fail
        if(!$login_data){

            return back()->with('Error', 'Login creadentials are incorrect');
        }

        return redirect()->route('dashboard');
    }

}

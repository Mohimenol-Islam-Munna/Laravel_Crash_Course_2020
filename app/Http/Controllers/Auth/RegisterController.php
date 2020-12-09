<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){


        $validation  = $request->validate([

            'fname' => 'required|max:255',
            'uname' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'min:6',
        ]);




        $form_data = array();


        $form_data['name'] = $request->fname;
        $form_data['username'] = $request->uname;
        $form_data['email'] = $request->email;
        $form_data['password'] = Hash::make($request->password);
        // $form_data['confirm_password'] = $request->password_confirmation;

        DB::table('users')->insert($form_data);

        // login after register
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}


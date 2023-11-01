<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'username'=> 'required',
            'password'=> 'required'
        ]);

        $credentials = $request->only('username','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Login failed");
    }
}

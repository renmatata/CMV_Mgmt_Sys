<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function register()
    {
        return view('auth.register');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // return view('home');
            // return redirect()->route('home');
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Login failed");
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/'); // You can redirect to any other page after logging out.
    }
}

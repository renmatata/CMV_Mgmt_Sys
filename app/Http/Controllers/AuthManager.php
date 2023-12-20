<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    // function login()
    // {
    //     return view('auth.login');
    // }

    function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
           // Validate the user input
           $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Optionally log in the newly registered user
        auth()->login($user);

        // Redirect the user to a dashboard or another page
        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/'); // You can redirect to any other page after logging out.
    }
}

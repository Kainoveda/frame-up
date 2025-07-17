<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login'); // Make sure this file exists in resources/views/auth/login.blade.php
    }

    public function showRegister()
    {
        return view('auth.register'); // Make sure this file exists in resources/views/auth/register.blade.php
    }

    public function user($user_id)
    {
        return $user_id;
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
    'full_name' => 'required|string|max:255',
    'username' => 'required|unique:users,username',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:8|confirmed',
]);


        User::create([
            'full_name' => $validated['full_name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        

        return redirect()->route('home'); // Make sure this route name exists in your web.php
    }
}

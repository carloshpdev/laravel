<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required', //|string|max:255',
            'email' => 'required', //|string|email|max:255|unique:users',
            'password' => 'required', //|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);




        Auth::login($user);

        return view('index')->with('success', 'You have been registered and logged in.');
    }
}

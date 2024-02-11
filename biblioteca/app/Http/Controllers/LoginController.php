<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginFormView()
    {
        return view('login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/'); // Redirigir a la página deseada después del inicio de sesión
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }
}

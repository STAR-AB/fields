<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function auth(){
        return view('auth.login');
    }

    public function registerForm(){
        return view('auth.register');
    }
    public function dashboard(){
        return view('auth.dashboard');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'the provided credentials do not match our email'
        ])->onlyInput('email');
    }

    public function register(Request $request){
        $validation = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'password' => ['required']
         ]);
         User::create($validation);
         return redirect()->intended('login');
    }
}


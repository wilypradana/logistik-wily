<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MiddlewareController extends Controller
{
    public function login(){
        return view("pages.auth-login");
    }
    public function authenticating(Request $request){

     
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $remember = $request->has('remember');
        if (Auth::attempt($credentials,$remember)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return redirect()->back()
        ->with('error', 'password atau email salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/auth/login');
    }
}

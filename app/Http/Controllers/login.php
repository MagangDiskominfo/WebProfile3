<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    public function index () {
        return view ('admin.login');
    }
    
    public function login(Request $request){

        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:32',
            'captcha' => 'required|captcha',
        ]);

        $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard')->with("success", "Login Berhasil");
            } else {
                return back()->with('loginFailed', 'Email dan Password salah!');
            }
        }

        public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
    
}

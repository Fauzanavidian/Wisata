<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Administrator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login',['title' => 'login']);
    }

    public function authenticate(Request $request)
    {
        $credentials =  $request->validate([
            'email'=> 'required|email:dns',
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin-wisata');
        }

        return back()->with('loginError','Login failed!!!');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}

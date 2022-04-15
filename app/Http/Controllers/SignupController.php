<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Administrator;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signup()
    {
        return view('signup',['title' => 'signup']);
    }

    public function store(Request $request)
    {
    $validatedDate = $request->validate([
       'name' => 'required|max:225',
       'email' => 'required|email|unique:customers',
       'password' => 'required|min:5|max:225',
       'phone' => 'required',
       'usia' => 'required',
       'motto' => 'required',
       'status' => 'required',
       'kode' => 'required',
        ]);

        // $validatedDate['password'] = bcrypt($validatedDate['password']);
        $validatedDate['password'] = Hash::make($validatedDate['password']);
        
        User::create($validatedDate);

        $request->session()->flash('success', 'Signup successful!, Please Login!!! ');

        return redirect('/login');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function editinfo() {

        $data = User::all();
        return response()->json(['message' => 'Success','data'=>$data]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email',
            'password' => 'required|min:5|max:25',
            'phone' => 'required',
            'usia' => 'required',
            'motto' => 'required',
            'status' => 'required',
            'JK' => 'required',
            'foto' => 'required',
             ]);

        $request['password'] = Hash::make($request['password']);
        $data =  User::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoadmin/',$request->file('foto')->getClientOriginalName());
            $data-> foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return response()->json(['message' => 'Success','data'=>$data]);
    }
    // //delete
    //     public function deleteinfo($id){
    //     User::destroy(auth()->user()->id);
    //     #notifikasi delete berhasil
    //     return response()->json(['message' => 'Success','data'=>null]);
    //     }
}

<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function editinfo(){

        return view('editinfo');
    }

    public function updateinfo(Request $request){

        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'usia' => 'required',
            'motto' => 'required',
            'status' => 'required',
            'JK' => 'required',
        ]);
        $data = User::find(auth()->user()->id);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoadmin/',$request->file('foto')->getClientOriginalName());
            $data-> foto = 'fotoadmin/'. $request->file('foto')->getClientOriginalName();
        }
        $request->user()->update(
            $request->all()
        
        );
        return redirect('/dataAdmin')->with('berhasil','Edit Succes!!!');
    }
    public function deleteinfo(){
        User::destroy(auth()->user()->id);
        return redirect('/login')->with('delete_s','Delete Account Succes!!!');;

    }

}

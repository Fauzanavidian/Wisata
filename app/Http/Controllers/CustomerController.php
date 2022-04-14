<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Customer::where('full_name','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $data = Customer::paginate(5);
            // $data = customer::all();
        }
        return view('datacustomer',compact('data'));
    }

    public function tambahcustomer(){
        return view('tambahcustomer');
    }

    public function insertcustomer(Request $request){
        // dd($request->all());
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        //notifikasi/alert belum muncul

        $data = Customer::create($request->all());
        return redirect()->route('customer')->with('success',' Data Berhasil Di Tambahkan ke List customer');
    }

    public function showcustomer($id){

        $data = Customer::find($id);
        // dd($data);
        return view('editcustomer',compact('data'));
    }

    public function updatecustomer(Request $request, $id){

        $data = Customer::find($id);
        $data->update($request->all());
        return redirect()->route('customer')->with('success',' Data Berhasil Di Update ke List customer');
    }

    public function deletecustomer($id){
        $data = Customer::find($id);
        $data->delete();
        return redirect()->route('customer')->with('success',' Data Berhasil Di Delete dari List customer');
    }
}

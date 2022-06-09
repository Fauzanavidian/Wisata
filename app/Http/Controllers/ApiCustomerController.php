<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class ApiCustomerController extends Controller
{
    
    public function index() {

        $data = Customer::all();
        return response()->json(['message' => 'Success','data'=>$data]);
    }
    //detail
    public function showcustomer($id){
        $data = Customer::find($id);
        return response()->json(['message' => 'Success','data'=>$data]);
    }
    
    //create
    public function insertcustomer(Request $request){
    $request->validate([
        'full_name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'password' => 'required',
    ]);
    $request['password'] = Hash::make($request['password']);
    $data = Customer::create($request->all());
    return response()->json(['message' => 'Success','data'=>$data],200);
    }

    //update
    public function updatecustomer(Request $request, $id){
        $request->validate([
            'full_name' => '',
            'email' => '',
            'phone' => '',
            'password' => '',
        ]);

        $request['password'] = Hash::make($request['password']);

        $data = Customer::find($id);
        $data->update($request->all());
        return response()->json(['message' => 'Success update','data'=>$data]);
    }

    //delete
    public function deletecustomer(){
    $data = Customer::find($id);
    $data->delete();
    return response()->json(['message' => 'Success delete','data'=>null]);
    }
}

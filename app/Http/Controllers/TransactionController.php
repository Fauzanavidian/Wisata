<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    //
    public function index(Request $request){

        if($request->has('search')){
            $data = Transaksi::where('email_customer','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $data = Transaksi::paginate(5);
            // $data = Wisata::all();
        }
        return view('datatransaksi',compact('data'));
    }

    public function inserttransaction(Request $request){
        $request->validate([
            'Username'=>'required',
            'Total_Prices'=>'required',
        ]);

        $data = Transaksi::create($request->all());
        return redirect()->route('Transaction')->with('Success','Data berhasil ditambahkan ke dalam data transaksi');
    }

    public function edittransaction(){
        $data = Session::get('datatransaksi');
        return view('edittransaksi',compact('data'));
    }

    public function showtransaction($id){
        $data = Transaksi::find($id);
        Session::put('datatransaksi',$data);
        return redirect()->action([TransactionController::class, 'edittransaction']);
    }

    public function updatetransaction(Request $request, $id){

        $data = Transaksi::find($id);
        $data->update($request->all());
        return redirect()->route('Transaction')->with('Success','Data berhasil diperbaharui');
    }

    public function deletetransaction($id){
        $data = Transaksi::find($id);
        $data->delete();
        return redirect()->route('Transaction')->with('Success','Data berhasil dihapus');
    }
}

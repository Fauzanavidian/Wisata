<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function insertTransaction(Request $request){
        $request->validate([
            'Username'=>'required',
            'Total_Prices'=>'required',
        ]);

        $data = Transaction::create($request->all());
        return redirect()->route('Transaction')->with('Success','Data berhasil ditambahkan ke dalam data transaksi');
    }

    public function showTransaction($id){
        $data = showTransaction::find($id);
        return view('datatransaksi',compact('data'));
    }

    public function updateTransaction(Request $request, $id){
        $data = Transaction::find($id);
        $data->update($request->all());
        return redirect()->route('Transaction')->with('Success','Data berhasil diperbaharui');
    }

    public function deleteTransaction($id){
        $data = Transaction::find($id);
        $data->delete();
        return redirect()->route('Transaction')->with('Success','Data berhasil dihapus');
    }
}

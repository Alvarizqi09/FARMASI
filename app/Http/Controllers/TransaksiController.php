<?php

namespace App\Http\Controllers;


use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){        

        $data = Transaksi::all();
        return view('Transaksi.datatransaksi',compact('data'));
    }

    public function tambahtransaksi(){        

        return view('Transaksi.tambahdata');
    }

    public function insertdata(Request $request){        
        $data = Transaksi::create($request->all());
        return redirect()->route('transaksi')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){        
        $data = Transaksi::find($id);
        return view('Transaksi.tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){        
        $data = Transaksi::find($id);
        $data->update($request->all());
        return redirect()->route('transaksi')->with('success',' Data Berhasil Di Update');
    }

    public function delete($id){        
        $data = Transaksi::find($id);
        $data->delete();
        return redirect()->route('transaksi')->with('success',' Data Berhasil Di Delete');
    }
}
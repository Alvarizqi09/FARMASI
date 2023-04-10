<?php

namespace App\Http\Controllers;


use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index(){        

        $data = Pembelian::all();
        return view('datatransaksi',compact('data'));
    }

    public function tambahtransaksi(){        

        return view('tambahdata');
    }

    public function insertdata(Request $request){        
        $data = Pembelian::create($request->all());
        return redirect()->route('transaksi')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){        
        $data = Pembelian::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){        
        $data = Pembelian::find($id);
        $data->update($request->all());
        return redirect()->route('transaksi')->with('success',' Data Berhasil Di Update');
    }

    public function delete($id){        
        $data = Pembelian::find($id);
        $data->delete();
        return redirect()->route('transaksi')->with('success',' Data Berhasil Di Delete');
    }
}
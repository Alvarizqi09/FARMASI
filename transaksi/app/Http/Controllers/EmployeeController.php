<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){        

        $data = Employee::all();
        return view('datatransaksi',compact('data'));
    }

    public function tambahtransaksi(){        

        return view('tambahdata');
    }

    public function insertdata(Request $request){        
        $data = Employee::create($request->all());
        return redirect()->route('transaksi')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){        
        $data = Employee::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){        
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('transaksi')->with('success',' Data Berhasil Di Update');
    }

    public function delete($id){        
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('transaksi')->with('success',' Data Berhasil Di Delete');
    }
}


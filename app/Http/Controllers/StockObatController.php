<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\stockObat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockObatController extends Controller
{
    public function index() 
    {
        $obat = Obat::where('ready', 'N')->get();
        $stock = stockObat::join()
            ->get();
        if (request()->ajax()) {
            return datatables()->of($stock)
                ->addColumn('action', function ($stock) {
                    $button = '<button class="edit btn btn-warning" id="' . $stock->id .'" name="edit">Edit</button>';
                    $button .= '<button class="edit btn btn-warning" id="' . $stock->id .'" name="hapus">Hapus</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('layouts.stockObat', compact('obat'));
    }

    public function store(Request $request) 
    {
        $data = new stockObat();
        $data->idObat = $request->nama_obat;
        $data->masuk = $request->masuk;
        $data->keluar = $request->keluar;
        $data->beli = $request->beli;
        $data->jual = $request->jual;
        $data->stock = $request->stock;
        $data->tanggal_masuk = $request->tanggal_masuk;
        $data->kadaluwarsa = $request->kadaluwarsa;
        $data->keterangan = $request->keterangan;
        
        $simpan = $data->save();
        if ($simpan) {
            DB::table('obats')->where('id', $request->obat)->update(['ready' => 'Y']);
            return response()->json(['text'=>'Data berhasil disimpan'], 200);
        } 
        else {
            return response()->json(['text'=>'Data gagal disimpan'], 400);
        }
        // dd($request->all());
    }

    public function getObat(Request $request)
    {
        $data = stockObat::where('idObat', $request->id)->first();
        $null = [
            'stock' => 0
        ];
        if ($data != null) {
            return response()->json(['data' => $data]);
        } else {
            return response()->json(['data' => $null]);
        }
    }
}

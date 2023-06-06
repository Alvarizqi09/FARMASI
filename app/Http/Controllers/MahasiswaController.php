<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan semua data dari model Mahasiswa
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'IDMahasiswa' => 'required|unique:mahasiswas',
            'Nama' => 'required',
            'Jenis_Kelamin' => 'required',
            'Prodi' => 'required',
            'Agama' => 'required',
            'NIK' => 'required',
            'Telepon' => 'required',
            'Alamat' => 'required',
            'Tanggal_Lahir' => 'required',
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->IDMahasiswa = $request->IDMahasiswa;
        $mahasiswa->Nama = $request->Nama;
        $mahasiswa->Jenis_Kelamin = $request->Jenis_Kelamin;
        $mahasiswa->Prodi = $request->Prodi;
        $mahasiswa->Agama = $request->Agama;
        $mahasiswa->NIK = $request->NIK;
        $mahasiswa->Telepon = $request->Telepon;
        $mahasiswa->Alamat = $request->Alamat;
        $mahasiswa->Tanggal_Lahir = $request->Tanggal_Lahir;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi
        $validated = $request->validate([
            'IDMahasiswa' => 'required|unique:mahasiswas',
            'Nama' => 'required',
            'Jenis_Kelamin' => 'required',
            'Prodi' => 'required',
            'Agama' => 'required',
            'NIK' => 'required',
            'Telepon' => 'required',
            'Alamat' => 'required',
            'Tanggal_Lahir' => 'required',
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->IDMahasiswa = $request->IDMahasiswa;
        $mahasiswa->Nama = $request->Nama;
        $mahasiswa->Jenis_Kelamin = $request->Jenis_Kelamin;
        $mahasiswa->Prodi = $request->Prodi;
        $mahasiswa->Agama = $request->Agama;
        $mahasiswa->NIK = $request->NIK;
        $mahasiswa->Telepon = $request->Telepon;
        $mahasiswa->Alamat = $request->Alamat;
        $mahasiswa->Tanggal_Lahir = $request->Tanggal_Lahir;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}

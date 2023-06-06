<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\mahasiswaFariska;
use App\Models\prodiFariska;

class MahasiswaFariskaController extends Controller
{
    public function index(): View
    {
        $prodi = prodiFariska::select('id', 'nama_prodi')->get();
        $mahasiswafariskas = mahasiswaFariska::latest()->paginate(5);
        
        return view('mahasiswafariskas.index',compact('mahasiswafariskas', 'prodi'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $prodi = prodiFariska::select('id', 'nama_prodi')->get();

        return view('mahasiswafariskas.create', compact('prodi'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'prodi' => 'required',
        ]);
        
        mahasiswaFariska::create($request->all());
         
        return redirect()->route('mahasiswafariskas.index')
                        ->with('success','Product created successfully.');
    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswaFariska $mahasiswafariska): View
    {
        $prodi = prodiFariska::select('id', 'nama_prodi')->get();

        return view('mahasiswafariskas.edit',compact('mahasiswafariska', 'prodi'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswaFariska $mahasiswafariska): RedirectResponse
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'prodi' => 'required',
        ]);
        
        $mahasiswafariska->update($request->all());
        
        return redirect()->route('mahasiswafariskas.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswaFariska $mahasiswafariska): RedirectResponse
    {
        $mahasiswafariska->delete();
         
        return redirect()->route('mahasiswafariskas.index')
                        ->with('success','Product deleted successfully');
    }
}

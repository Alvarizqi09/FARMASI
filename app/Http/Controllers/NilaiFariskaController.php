<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\mahasiswaFariska;
use App\Models\nilaiFariska;
use App\Models\matkulFariska;

class NilaiFariskaController extends Controller
{
    public function index(): View
    {
        $mk = matkulFariska::select('id', 'nama_mk')->get();
        $nama = mahasiswaFariska::select('id', 'nama')->get();

        $nilaifariskas = nilaiFariska::latest()->paginate(5);
        
        return view('nilaifariskas.index',compact('nilaifariskas', 'mk', 'nama'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $mk = matkulFariska::select('id', 'nama_mk')->get();
        $nama = mahasiswaFariska::select('id', 'nama')->get();
        return view('nilaifariskas.create', compact('mk', 'nama'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nilai' => 'required',
            'mk' => 'required',
            'nama' => 'required',
        ]);
        
        nilaiFariska::create($request->all());
         
        return redirect()->route('nilaifariskas.index')
                        ->with('success','Product created successfully.');
    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nilaiFariska $nilaifariska): View
    {
        $mk = matkulFariska::select('id', 'nama_mk')->get();
        $nama = mahasiswaFariska::select('id', 'nama')->get();
        return view('nilaifariskas.edit',compact('nilaifariska', 'mk', 'nama'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nilaiFariska $nilaifariska): RedirectResponse
    {
        $request->validate([
            'nilai' => 'required',
            'mk' => 'required',
            'nama' => 'required',
        ]);
        
        $nilaifariska->update($request->all());
        
        return redirect()->route('nilaifariskas.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nilaiFariska $nilaifariska): RedirectResponse
    {
        $nilaifariska->delete();
         
        return redirect()->route('nilaifariskas.index')
                        ->with('success','Product deleted successfully');
    }
}

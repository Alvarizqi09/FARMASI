<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\prodiFariska;

class ProdiFariskaController extends Controller
{
    public function index(): View
    {
        $prodifariskas = prodiFariska::latest()->paginate(5);
        
        return view('prodifariskas.index',compact('prodifariskas'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('prodifariskas.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_prodi' => 'required',
            'nama_prodi' => 'required',
        ]);
        
        prodiFariska::create($request->all());
         
        return redirect()->route('prodifariskas.index')
                        ->with('success','Product created successfully.');
    }
  
    public function edit(prodiFariska $prodifariska): View
    {
        return view('prodifariskas.edit',compact('prodifariska'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prodiFariska $prodifariska): RedirectResponse
    {
        $request->validate([
            'id_prodi' => 'required',
            'nama_prodi' => 'required',
        ]);
        
        $prodifariska->update($request->all());
        
        return redirect()->route('prodifariskas.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prodiFariska $prodifariska): RedirectResponse
    {
        $prodifariska->delete();
         
        return redirect()->route('prodifariskas.index')
                        ->with('success','Product deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\matkulFariska;


class MatkulFariskaController extends Controller
{
    public function index(): View
    {
        $matkulfariskas = matkulFariska::latest()->paginate(5);
        
        return view('matkulfariskas.index',compact('matkulfariskas'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('matkulfariskas.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'idMk' => 'required',
            'nama_mk' => 'required',
        ]);
        
        matkulFariska::create($request->all());
         
        return redirect()->route('matkulfariskas.index')
                        ->with('success','Product created successfully.');
    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(matkulFariska $matkulfariska): View
    {
        return view('matkulfariskas.edit',compact('matkulfariska'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, matkulFariska $matkulfariska): RedirectResponse
    {
        $request->validate([
            'idMk' => 'required',
            'nama_mk' => 'required',
        ]);
        
        $matkulfariska->update($request->all());
        
        return redirect()->route('matkulfariskas.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matkulfariska $matkulfariska): RedirectResponse
    {
        $matkulfariska->delete();
         
        return redirect()->route('matkulfariskas.index')
                        ->with('success','Product deleted successfully');
    }
}

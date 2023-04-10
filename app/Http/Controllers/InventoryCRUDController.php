<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class InventoryCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $inventories = Inventory::latest()->paginate(5);
        
        return view('inventories.index',compact('inventories'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('inventories.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_obat' => 'required',
            'nama_obat' => 'required',
            'jumlah_tersedia' => 'required',
            'expired' => 'required',
            'lokasi_simpan' => 'required'
        ]);
        
        Inventory::create($request->all());
         
        return redirect()->route('inventories.index')
                        ->with('success','Inventory created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory): View
    {
        return view('inventories.show',compact('inventory'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory): View
    {
        return view('inventories.edit',compact('inventory'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory): RedirectResponse
    {
        $request->validate([
            'id_obat' => 'required',
            'nama_obat' => 'required',
            'jumlah_tersedia' => 'required',
            'expired' => 'required',
            'lokasi_simpan' => 'required'
        ]);
        
        $inventory->update($request->all());
        
        return redirect()->route('inventories.index')
                        ->with('success','Inventory updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory): RedirectResponse
    {
        $inventory->delete();
         
        return redirect()->route('inventories.index')
                        ->with('success','Inventory deleted successfully');
    }
}

<?php

  

namespace App\Http\Controllers;

  

use App\Models\Supplier;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use Illuminate\View\View;

  

class SupplierCRUDController extends Controller

{

    /**

     * Display a listing of the resource.

     */

    public function index(): View

    {

        $supplier = Supplier::latest()->paginate(5);

        

        return view('supplier.index',compact('supplier'))

                    ->with('i', (request()->input('page', 1) - 1) * 5);

    }

  

    /**

     * Show the form for creating a new resource.

     */

    public function create(): View

    {

        return view('supplier.create');

    }

  

    /**

     * Store a newly created resource in storage.

     */

    public function store(Request $request): RedirectResponse

    {

        $request->validate([

            'id_manager' => 'required',

            'nama' => 'required',
            
            'email' => 'required',

            'alamat' => 'required',
            
            'jenis_obat' => 'required',
            
            'harga' => 'required',
           
        ]);

        

        Supplier::create($request->all());

         

        return redirect()->route('supplier.index')

                        ->with('success','Supplier created successfully.');

    }

  

    /**

     * Display the specified resource.

     */

    public function show(Supplier $supplier): View

    {

        return view('supplier.show',compact('supplier'));

    }

  

    /**

     * Show the form for editing the specified resource.

     */

    public function edit(Supplier $supplier): View

    {

        return view('supplier.edit',compact('supplier'));

    }

  

    /**

     * Update the specified resource in storage.

     */

    public function update(Request $request, Supplier $supplier): RedirectResponse

    {

        $request->validate([

            'id_manager' => 'required',

            'nama' => 'required',
            
            'email' => 'required',

            'alamat' => 'required',
            
            'jenis_obat' => 'required',
            
            'harga' => 'required',
           

        ]);

        

        $supplier->update($request->all());

        

        return redirect()->route('supplier.index')

                        ->with('success','Supplier updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     */

    public function destroy(Supplier $supplier): RedirectResponse

    {

        $supplier->delete();

         

        return redirect()->route('supplier.index')

                        ->with('success','supplier deleted successfully');

    }

}
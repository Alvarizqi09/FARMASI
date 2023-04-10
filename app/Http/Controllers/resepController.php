<?php

namespace App\Http\Controllers;

use App\Models\resep;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;


class resepController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return response()
    //  */
    public function index(): View
    {
        //get resep
        $reseps = resep::latest()->paginate(5);

        //render view with resep
        return view('resep.index', compact('reseps'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    // Show the form for creating a new resource.
    public function create(): View
    {
        return view('resep.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'ID_Apoteker' => 'required',
            'No_Resep' => 'required',
            'Nama_Pasien' => 'required',
            'No_RM' => 'required',
            'Nama_Dokter' => 'required',
            'Nama_Obat' => 'required',
            'Nama_Dosis' => 'required',
            'tanggal_resep' => 'required',
        ]);

        $input = $request->all();

        resep::create($input);
       
        return redirect()->route('resep.index')
                        ->with('success','resep created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(resep $resep): View
    {
        return view('resep.show',compact('resep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(resep $resep): View
    {
        return view('resep.edit',compact('resep'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, resep $resep): RedirectResponse
    {
        $request->validate([
            'ID_Apoteker' => 'required',
            'No_Resep' => 'required',
            'Nama_Pasien' => 'required',
            'No_RM' => 'required',
            'Nama_Dokter' => 'required',
            'Nama_Obat' => 'required',
            'Nama_Dosis' => 'required',
            'tanggal_resep' => 'required',
        ]);

        $input = $request->all();
            
        $resep->update($input);
      
        return redirect()->route('resep.index')
                        ->with('success','resep updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(resep $resep): RedirectResponse
    {
        $resep->delete();

        return redirect()->route('resep.index')
                        ->with('success','resep deleted successfully');
    }
    
}
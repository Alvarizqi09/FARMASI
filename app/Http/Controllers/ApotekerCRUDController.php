<?php
  
namespace App\Http\Controllers;
  
use App\Models\Apoteker;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class ApotekerCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $apoteker = Apoteker::latest()->paginate(5);
        
        return view('apoteker.index',compact('apoteker'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('apoteker.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_apoteker' => 'required',
            'jam_kerja' => 'required',
            'email' => 'required',
    
        ]);
        
        Apoteker::create($request->all());
         
        return redirect()->route('apoteker.index')
                        ->with('success','Stock created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Apoteker $apoteker): View
    {
        return view('apoteker.show',compact('apoteker'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apoteker $apoteker): View
    {
        return view('apoteker.edit',compact('apoteker'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apoteker $apoteker): RedirectResponse
    {
        $request->validate([
            'nama_apoteker' => 'required',
            'jam_kerja' => 'required',
            'email' => 'required',
        ]);
        
        $apoteker->update($request->all());
        
        return redirect()->route('apoteker.index')
                        ->with('success','Stock updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apoteker $apoteker): RedirectResponse
    {
        $apoteker->delete();
         
        return redirect()->route('apoteker.index')
                        ->with('success','Stock deleted successfully');
    }
}
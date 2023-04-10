<?php
  
namespace App\Http\Controllers;
  
use App\Models\Stock;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class StockCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $stocks = Stock::latest()->paginate(5);
        
        return view('stocks.index',compact('stocks'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('stocks.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_obat' => 'required',
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'dosis' => 'required',
            'efek_samping' => 'required',
            'bentuk_obat' => 'required',
            'kategori_resep' => 'required',
            'stok_minimal' => 'required'
        ]);
        
        Stock::create($request->all());
         
        return redirect()->route('stocks.index')
                        ->with('success','Stock created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Stock $stock): View
    {
        return view('stocks.show',compact('stock'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stock $stock): View
    {
        return view('stocks.edit',compact('stock'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stock $stock): RedirectResponse
    {
        $request->validate([
            'id_obat' => 'required',
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'dosis' => 'required',
            'efek_samping' => 'required',
            'bentuk_obat' => 'required',
            'kategori_resep' => 'required',
            'stok_minimal' => 'required'
        ]);
        
        $stock->update($request->all());
        
        return redirect()->route('stocks.index')
                        ->with('success','Stock updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock): RedirectResponse
    {
        $stock->delete();
         
        return redirect()->route('stocks.index')
                        ->with('success','Stock deleted successfully');
    }
}
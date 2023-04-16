<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TypeDrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $types = Type::latest()->paginate(5);

        return view('types.index', compact('types'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        Type::create($request->all());

        return redirect()->route('types.index')->with('berhasil', 'jenis obat berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type): View
    {
        return view('types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type):RedirectResponse
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        $type->update($request->all());
        return redirect()->route('types.index')->with('berhasil', 'jenis obat berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type): RedirectResponse
    {
        $type->delete();

        return redirect()->route('types.index')->with('berhasil', 'jenis obat berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\student;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = student::latest()->paginate(5);

        //render view with mahasiswas
        return view('student.index', compact('students'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
    
        return view('student.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'NIM' => 'required',
            'nama' => 'required',
            'NIK' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
        ]);
        
        student::create($request->all());
         
        return redirect()->route('student.index')
                        ->with('success','Product created successfully.');
    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function show(student $student): View
    {
        return view('student.show',compact('student'));
    }
    public function edit(student $students): View
    {

        return view('student.edit',compact('students'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student): RedirectResponse
    {
        $request->validate([
            'NIM' => 'required',
            'nama' => 'required',
            'NIK' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
        ]);
        
        $student->update($request->all());
        
        return redirect()->route('student.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student): RedirectResponse
    {
        $student->delete();
         
        return redirect()->route('student.index')
                        ->with('success','Product deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller{
    public function index(){
        return view('auth.login');
    }
    public function login_proses(Request $request){
        $request->validate([
            'email' => 'required',
            'password'  =>  'required',
        ]);

        $data=[
            'email' => $request->email,
            'password' => $request->paddword,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('failed','email atau password salah');
        }
    }
}
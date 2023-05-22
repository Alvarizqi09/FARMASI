<?php namespace App\Http\Controllers\Auth\LoginController;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller{
    public function index(){
        return view('login');
    }
    public function login_proses(Request $request){
        $request->validate([
            'email' => 'required',
            'password'  =>  'required',
        ]);

        $data=[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data))
        {
            return redirect::intended('resources/views/layout/main.blade.php');
        }else{
            return redirect()->route('login')->with('failed','email atau password salah');
        }
    }
}
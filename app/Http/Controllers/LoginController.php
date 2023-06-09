<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;
use Exception;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller{
    public function index(){
        return view('Login.login');
    }
    public function login_proses(Request $request){
        if (Auth::attempt($request->only('email','password'))){
            return view('layout.main');
        }
        return view('layout.main');
        
       // --$request->validate([
        //    'email' => 'required',
         //   'password'  =>  'required',
        //

       // $data=[
       //     'email' => $request->email,
      //      'password' => $request->password,
      //p  ];

    }
}
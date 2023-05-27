<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Socialite;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
            'password' => $request->password,
        ];

    }
}
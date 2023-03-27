<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resepcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/',[Resepcontroller::class,'index']);
Route::get('/create',[Resepcontroller::class,'create']);
Route::post('/store',[Resepcontroller::class,'store']);
Route::get('/show/{id}',[Resepcontroller::class,'show']);
Route::post('/update/{id}',[Resepcontroller::class,'update']);
Route::get('/destroy/{id}',[Resepcontroller::class,'destroy']);
<?php

use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\pegawaiData;
use App\Http\Controllers\StockCRUDController;
use App\Http\Controllers\InventoryCRUDController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/resep', function () {
    return view('welcome');
});

Route::resource('pegawai', pegawaiController::class);
Route::resource('stocks', StockCRUDController::class);
Route::resource('inventories', InventoryCRUDController::class);
Route::resource('resep', resepController::class);


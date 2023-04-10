<?php

use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\resepController;
use App\Http\Controllers\StockCRUDController;
use App\Http\Controllers\ApotekerCRUDController;
use App\Http\Controllers\InventoryCRUDController;
use App\Http\Controllers\SupplierCRUDController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembelianController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('stocks', StockCRUDController::class);
Route::resource('pegawai', pegawaiController::class);
Route::resource('inventories', InventoryCRUDController::class);
Route::resource('supplier', SupplierCRUDController::class);
Route::resource('apoteker', ApotekerCRUDController::class);
Route::resource('resep', resepController::class);
Route::resource('inventories', InventoryCRUDController::class);
Route::resource('pembelian', PembelianController::class);
Route::resource('Transaksi', TransaksiController::class);

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');

Route::get('/tambahtransaksi', [TransaksiController::class, 'tambahtransaksi'])->name('tambahtransaksi');
Route::post('/insertdata', [TransaksiController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[TransaksiController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[TransaksiController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[TransaksiController::class, 'delete'])->name('delete');

Route::get('/pembelian', [PembelianController::class, 'index'])->name('transaksi');

Route::get('/tambahtransaksi', [PembelianController::class, 'tambahtransaksi'])->name('tambahtransaksi');
Route::post('/insertdata', [PembelianController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[PembelianController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[PembelianController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[PembelianController::class, 'delete'])->name('delete');
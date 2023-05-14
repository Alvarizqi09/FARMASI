<?php

use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\resepController;
use App\Http\Controllers\StockCRUDController;
use App\Http\Controllers\ApotekerCRUDController;
use App\Http\Controllers\InventoryCRUDController;
use App\Http\Controllers\SupplierCRUDController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\TypeDrugController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\StockObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\JualansController;
use App\Http\Controllers\PengaduanController;



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
    return view('layout.main');
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
Route::resource('drugs', DrugController::class);
// Route::resource('types', TypeDrugController::class);
// Route::resource('categories', CategoryController::class);
// Route::resource('brands', BrandController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/loginproses', [LoginController::class, 'login_proses'])->name('loginproses');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');

Route::get('/tambahtransaksi', [TransaksiController::class, 'tambahtransaksi'])->name('tambahtransaksi');
Route::post('/insertdata', [TransaksiController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[TransaksiController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[TransaksiController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[TransaksiController::class, 'delete'])->name('delete');

Route::get('/pembelian', [PembelianController::class, 'index'])->name('transaksi');

Route::get('/tambahpembelian', [PembelianController::class, 'tambahpembelian'])->name('tambahpembelian');
Route::post('/insertdata', [PembelianController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[PembelianController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[PembelianController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[PembelianController::class, 'delete'])->name('delete');

// crud category
Route::get('category.index', [CategoryController::class, 'index'])->name('category.index');
Route::post('category.store', [CategoryController::class, 'store'])->name('category.store');
Route::post('category.edits', [CategoryController::class, 'edits'])->name('category.edits');
Route::post('category.updates', [CategoryController::class, 'updates'])->name('category.updates');
Route::post('category.hapus', [CategoryController::class, 'hapus'])->name('category.hapus');

// crud type
Route::get('type.index', [TypeDrugController::class, 'index'])->name('type.index');
Route::post('type.store', [TypeDrugController::class, 'store'])->name('type.store');
Route::post('type.edits', [TypeDrugController::class, 'edits'])->name('type.edits');
Route::post('type.updates', [TypeDrugController::class, 'updates'])->name('type.updates');
Route::post('type.hapus', [TypeDrugController::class, 'hapus'])->name('type.hapus');

// crud supplier
Route::get('brand.index', [BrandController::class, 'index'])->name('brand.index'); 
Route::post('brand.store', [BrandController::class, 'store'])->name('brand.store');
Route::post('brand.edits', [BrandController::class, 'edits'])->name('brand.edits');
Route::post('brand.updates', [BrandController::class, 'updates'])->name('brand.updates');
Route::post('brand.hapus', [BrandController::class, 'hapus'])->name('brand.hapus');

// crud satuan
Route::get('satuan.index', [SatuanController::class, 'index'])->name('satuan.index');
Route::post('satuan.store', [SatuanController::class, 'store'])->name('satuan.store');
Route::post('satuan.edits', [SatuanController::class, 'edits'])->name('satuan.edits');
Route::post('satuan.updates', [SatuanController::class, 'updates'])->name('satuan.updates');
Route::post('satuan.hapus', [SatuanController::class, 'hapus'])->name('satuan.hapus');

// crud obat
Route::get('obat.index', [ObatController::class, 'index'])->name('obat.index');
Route::post('obat.store', [ObatController::class, 'store'])->name('obat.store');
Route::post('obat.edits', [ObatController::class, 'edits'])->name('obat.edits');
Route::post('obat.updates', [ObatController::class, 'updates'])->name('obat.updates');
Route::post('obat.hapus', [ObatController::class, 'hapus'])->name('obat.hapus');

// crud katalog obat
Route::get('stocks.index', [StockObatController::class, 'index'])->name('stocks.index');
Route::post('stocks.store', [StockObatController::class, 'store'])->name('stocks.store');
Route::post('getObat', [StockObatController::class, 'getObat'])->name('getObat');
Route::post('/stock.edits', [StockObatController::class, 'edits'])->name('stock.edits');
Route::post('stock.updates', [StockObatController::class, 'updates'])->name('stock.updates');
Route::post('stock.hapus', [StockObatController::class, 'hapus'])->name('stock.hapus');

// crud penjualan
Route::get('penjualan.index', [JualansController::class, 'index'])->name('penjualan.index'); 
Route::post('getDataObat', [StockObatController::class, 'getDataObat'])->name('getDataObat'); 
Route::post('jualan.store', [JualansController::class, 'store'])->name('jualan.store'); 
Route::get('jualans.dataTable',[JualansController::class, 'dataTable'])->name('jualans.dataTable');

//crud pengaduan
Route::get('pengaduan.index', [PengaduanController::class, 'index'])->name('pengaduan.index');
Route::post('pengaduan.store', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::post('pengaduan.edits', [PengaduanController::class, 'edits'])->name('pengaduan.edits');
Route::post('pengaduan.updates', [PengaduanController::class, 'updates'])->name('pengaduan.updates');
Route::post('pengaduan.hapus', [PengaduanController::class, 'hapus'])->name('pengaduan.hapus');
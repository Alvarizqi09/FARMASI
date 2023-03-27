<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StockCRUDController;
use App\Http\Controllers\InventoryCRUDController;
 
Route::resource('stocks', StockCRUDController::class);
Route::resource('inventories', InventoryCRUDController::class);


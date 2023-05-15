<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\homeController;
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
    return view('master');
});

Route::get('/home', [App\Http\Controllers\homeController::class, 'index'])->name('user.index');

Route::get('/formkeranjang', [App\Http\Controllers\homeController::class, 'formKeranjang']);

Route::get('/tampilproduk', [App\Http\Controllers\ProdukController::class, 'tampilProduk'])->name('tampilproduk');
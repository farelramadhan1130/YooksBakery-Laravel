<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CheckoutController;

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


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
//Route User
Route::get('/home', [App\Http\Controllers\homeController::class, 'index'])->name('user.index');

Route::get('/formkeranjang', [App\Http\Controllers\homeController::class, 'formKeranjang'])->name('formkeranjang');

Route::get('/tampilproduk', [App\Http\Controllers\ProdukController::class, 'tampilProduk'])->name('tampilproduk');
Route::get('/tampilcart', [CartController::class, 'tampilcart'])->name('tampilcart');
Route::post('/masukkeranjang', [CartController::class, 'masukkanKeKeranjang'])->name('masukkeranjang');
Route::post('/kurangi-keranjang', [CartController::class, 'kurangiKeranjang'])->name('kurangikeranjang');
Route::post('/tambahkan-keranjang', [CartController::class, 'tambahkanKeranjang'])->name('tambahkankeranjang');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::patch('/cart/{product}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');


// Route Admin
//Middleware untuk akses web khusus admin
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard')->middleware('admin');
Route::get('/admin/datakategori', [App\Http\Controllers\AdminController::class, 'datakategori'])->name('datakategori')->middleware('admin');
Route::get('/admin/datasupplier', [App\Http\Controllers\AdminController::class, 'datasupplier'])->name('datasupplier')->middleware('admin');
Route::get('/admin/dataproduk', [App\Http\Controllers\AdminController::class, 'dataproduk'])->name('dataproduk')->middleware('admin');
Route::get('/admin/datauser', [App\Http\Controllers\AdminController::class, 'datauser'])->name('datauser')->middleware('admin');
Route::get('/admin/datatransaksipenjualan', [App\Http\Controllers\AdminController::class, 'datatransaksipenjualan'])->name('datatransaksipenjualan')->middleware('admin');
Route::get('/admin/datapesananpending', [App\Http\Controllers\AdminController::class, 'datapesananpending'])->name('datapesananpending')->middleware('admin');
Route::get('/admin/datalaporan', [App\Http\Controllers\AdminController::class, 'datalaporan'])->name('datalaporan')->middleware('admin');
Route::get('/admin/datalaporankeuntungan', [App\Http\Controllers\AdminController::class, 'datalaporankeuntungan'])->name('datalaporankeuntungan')->middleware('admin');

//Route Checkout
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\crudAdminController;

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
Route::get('/nota_customer/{id}', [CheckoutController::class, 'show'])->name('nota_customer');

//Route CRUD Admin
Route::get('/admin/datakategori/tambah', [CrudAdminController::class, 'kategoriTambah'])->name('kategori.tambah')->middleware('admin');;
Route::post('/admin/datakategori/simpan', [CrudAdminController::class, 'kategoriSimpan'])->name('kategori.simpan')->middleware('admin');;
Route::delete('/admin/datakategori/hapus/{id}', [CrudAdminController::class, 'kategoriHapus'])->name('kategori.hapus')->middleware('admin');
Route::get('/admin/datakategori/show/{id}', [CrudAdminController::class, 'kategoriShow'])->name('kategori.show');
Route::put('/admin/datakategori/update/{id}', [CrudAdminController::class, 'kategoriUpdate'])->name('kategori.update');

Route::get('/admin/dataproduk/tambah', [CrudAdminController::class, 'produkTambah'])->name('produk.tambah');
Route::post('/admin/dataproduk/simpan', [CrudAdminController::class, 'produkSimpan'])->name('produk.simpan');
Route::delete('/admin/dataproduk/hapus/{id}', [CrudAdminController::class, 'produkHapus'])->name('produk.hapus')->middleware('admin');
Route::get('/admin/dataproduk/show/{id}', [CrudAdminController::class, 'produkShow'])->name('produk.show');
Route::put('/admin/dataproduk/update/{id}', [CrudAdminController::class, 'produkUpdate'])->name('produk.update');

Route::get('/admin/datalaporan/update-status/{id_penjualan}', [CrudAdminController::class, 'updateStatus'])->name('update-status');
Route::get('/admin/datalaporan/pesanan-pending/hapus/{id_penjualan}', [CrudAdminController::class, 'hapusPesanan'])->name('hapus-pesanan');

Route::get('datalaporan/detail-transaksi-penjualan-produk/{id}', [CrudAdminController::class, 'showTransaksiPenjualan'])->name('detailtransaksi.penjualan');

Route::post('/admin/datauser/tambah/simpan', [CrudAdminController::class, 'userSimpan'])->name('user.simpan');
Route::get('/admin/datauser/tambah', [CrudAdminController::class, 'userTambah'])->name('user.tambah');
Route::get('/admin/datauser/show/{id}', [CrudAdminController::class, 'userShow'])->name('user.show');
Route::put('/admin/datauser/edit/{id}', [CrudAdminController::class, 'userUpdate'])->name('user.update');
Route::post('/register/Tambah', [CrudAdminController::class, 'userRegister'])->name('user.register');
Route::get('/register', [CrudAdminController::class, 'registerShow'])->name('user.registershow');
Route::delete('/admin/datauser/delete/{id}', [CrudAdminController::class, 'destroy'])->name('user.delete');
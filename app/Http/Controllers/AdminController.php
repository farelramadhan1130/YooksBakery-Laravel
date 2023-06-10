<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function datakategori()
    {
        $categories = DB::table('categories')->get();
        return view('admin.layouts-container')->with('categories', $categories);
    }
    public function datasupplier()
    {
        $suppliers = DB::table('suppliers')->get();
        return view('admin.layouts-fluid')->with('suppliers', $suppliers);
    }
    public function dataproduk()
    {
        $products = DB::table('products')->get();
        return view('admin.layouts-produk')->with('products', $products);
    }
    public function datauser()
    {
        $users = DB::table('users')->where('level', 'User')->get();
        return view('admin.layouts-user')->with('users', $users);
    }
    public function datatransaksipenjualan()
    {
        return view('admin.transaksi-penjualan');
    }
    public function datapesananpending()
    {
        return view('admin.data-pesanan-pending');
    }
    public function datalaporan()
    {
        return view('admin.laporan');
    }
    public function datalaporankeuntungan()
    {
        return view('admin.laporan_keuntungan');
    }
}
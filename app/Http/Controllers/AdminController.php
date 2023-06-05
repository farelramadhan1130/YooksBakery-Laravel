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
        return view('admin.layouts-fluid');
    }
    public function dataproduk()
    {
        return view('admin.layouts-produk');
    }
    public function datauser()
    {
        return view('admin.layouts-user');
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
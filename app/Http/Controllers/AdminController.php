<?php

namespace App\Http\Controllers;

use DateTime;
use DateInterval;
use DatePeriod;
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
        $supplier = DB::table('supplier')->get();
        return view('admin.layouts-fluid')->with('supplier', $supplier);
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
        $transaksipenjualan = DB::table('penjualan')
        ->leftJoin('users', 'penjualan.id_user', '=', 'users.id')
        ->select('penjualan.id', 'users.nama_user', 'users.telepon_user', 'penjualan.tanggal_penjualan', 'penjualan.tanggal_ambil_penjualan', 'penjualan.total_penjualan')
        ->get();
        return view('admin.transaksi-penjualan')->with('transaksipenjualan', $transaksipenjualan);
    }

    public function datapesananpending()
    {
        $pesananpending = DB::table('penjualan')
        ->leftJoin('users', 'penjualan.id_user', '=', 'users.id')
        ->select('penjualan.id', 'users.nama_user', 'users.telepon_user', 'penjualan.tanggal_penjualan', 'penjualan.tanggal_ambil_penjualan', 'penjualan.total_penjualan', 'penjualan.metode_pembayaran', 'penjualan.bukti', 'penjualan.status_pesanan')
        ->where('status_pesanan', 'Pending')
        ->get();
        return view('admin.data-pesanan-pending')->with('pesananpending', $pesananpending);
    }

    public function datalaporan()
    {
        $pesananlunas = DB::table('penjualan')
        ->leftJoin('users', 'penjualan.id_user', '=', 'users.id')
        ->select('penjualan.id', 'users.nama_user', 'users.telepon_user', 'penjualan.tanggal_penjualan', 'penjualan.tanggal_ambil_penjualan', 'penjualan.total_penjualan', 'penjualan.metode_pembayaran', 'penjualan.bukti', 'penjualan.status_pesanan')
        ->where('status_pesanan', 'Lunas')
        ->get();
        return view('admin.laporan')->with('pesananlunas', $pesananlunas);
    }

    public function datalaporankeuntungan()
    {
        if (request()->filled('tglm') && request()->filled('tgls')) {
            $tglm = request()->input('tglm');
            $tgls = request()->input('tgls');
        } else {
            $tgls = date("Y-m-d");
            $tglm = (new DateTime($tgls))->modify("-1 month")->format("Y-m-d");  
        }
    
        $laporan = array();
    
        $period = new DatePeriod(new DateTime($tglm), new DateInterval('P1D'), new DateTime($tgls));
        foreach ($period as $date) {
            $pertanggal = array();
            $tanggal = $date->format("Y-m-d");
            $keuntungantanggal = 0;
            $transaksitanggal = 0;
    
            $ambil = DB::table('penjualan_produk')
                ->leftJoin('penjualan', 'penjualan_produk.id_penjualan', '=', 'penjualan.id')
                ->whereDate('tanggal_penjualan', $tanggal)
                ->select('penjualan_produk.harga_produk', 'penjualan_produk.biaya_produk', 'penjualan_produk.jumlah_produk')
                ->get();
    
            foreach ($ambil as $tiap) {
                $transaksitanggal += $tiap->harga_produk * $tiap->jumlah_produk;
                $keuntungantanggal += ($tiap->harga_produk - $tiap->biaya_produk) * $tiap->jumlah_produk;
            }
    
            $pertanggal['tanggal'] = $tanggal;
            $pertanggal['keuntungan'] = $keuntungantanggal;
            $pertanggal['transaksi'] = $transaksitanggal;
            $laporan[] = $pertanggal;
        }
    
        return view('admin.laporan_keuntungan')->with('laporan', $laporan);
    }
}
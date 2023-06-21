<?php

namespace App\Http\Controllers;

use DateTime;
use DateInterval;
use DatePeriod;
use App\Models\User;
use App\Models\PenjualanProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //
    public function index()
    {
        $userCount = User::count();
        // Chart Kategori dan Produk
        $transaksiCount = PenjualanProduk::count();
        $allData = DB::table('products')
            ->leftJoin('categories', 'categories.id_kategori', '=', 'products.id_kategori')
            ->select('categories.nama_kategori as nama', DB::raw('COUNT(products.id_produk) as jumlah'))
            ->groupBy('products.id_kategori')
            ->get();

        // Set data
        $data = [];

        foreach ($allData as $val) {
            $data[] = [
                'country' => $val->nama,
                'value' => $val->jumlah,
            ];
        }

        // Chart Penjualan
         // Query data
         $allDataPenjualan = DB::table('penjualan')
         ->selectRaw('MONTH(tanggal_penjualan) AS bulan, COUNT(*) AS jumlah')
         ->whereRaw('YEAR(tanggal_penjualan) = YEAR(CURDATE())')
         ->groupBy('bulan')
         ->orderBy('bulan', 'ASC')
         ->get();

            // Map bulan ke nama bulan
            $bulan = [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember",
            ];

            $dataPenjualan = [];

            foreach ($allDataPenjualan as $val) {
                $dataPenjualan[] = [
                    'country' => $bulan[$val->bulan - 1],
                    'value' => $val->jumlah,
                ];
            }

        // Mengirim data ke view
        return view('admin.index', compact('userCount', 'transaksiCount', 'data', 'dataPenjualan'));
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
        // Memberikan batas tanggal kadaluarsa pada produk
        foreach ($products as $key => $value) {
        $tanggalProduksi = $value->tanggal_produksi;
        $tanggalSekarang = date('Y-m-d');

        $selisihHari = abs(strtotime($tanggalSekarang) - strtotime($tanggalProduksi)) / (60 * 60 * 24);

        if ($selisihHari > 3) {
            $products[$key]->keterangan = "Kadaluarsa";
        }
    }
        return view('admin.layouts-produk', ['products' => $products]);
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
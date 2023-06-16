<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\PenjualanProduk;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    //
    public function store(Request $request)
    {
        // ... kode sebelumnya ...

        // Simpan bukti pembayaran
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = $file->getClientOriginalName();
            $tujuanUpload = 'asset/image/image-admin/bukti';
            $file->move($tujuanUpload, $namaFile);
        } else {
            $namaFile = null;
        }
        $namaFile = $request->file('foto')->getClientOriginalName();
        $metode = $request->input('bank');
        $total_penjualan = $request->input('total');
        $tanggal = date("Y-m-d H:i:s");
        $tanggal_ambil_penjualan = $request->input('date');
        $jam = date("H:i:s");
        // Simpan ke tabel checkout
        $checkout = new Checkout();
        $checkout->id_toko = Auth::user()->id_toko;
        $checkout->id_user = Auth::user()->id;
        $checkout->tanggal_penjualan = $tanggal;
        $checkout->tanggal_ambil_penjualan = $tanggal_ambil_penjualan . ' ' . $jam;
        $checkout->total_penjualan = $total_penjualan;
        $checkout->metode_pembayaran = $metode;
        $checkout->bukti = $namaFile;
        $checkout->status_pesanan = "Pending";
        $checkout->save();

        // ... kode selanjutnya ...
        $id_penjualan = $checkout->id;
        $id_toko = Auth::user()->id_toko;
        foreach ($request->session()->get('keranjang') as $id_produk => $jumlah) {
            $produk = Produk::find($id_produk);

        $harga_beli = $produk->biaya_produk;
        $harga_jual = $produk->jual_produk;
        $nama_jual = $produk->nama_produk;
        $subtotal_jual = $harga_jual * $jumlah;

            PenjualanProduk::create([
                'id_penjualan' => $id_penjualan,
                'id_produk' => $id_produk,
                'id_toko' => $id_toko,
                'nama_produk' => $nama_jual,
                'biaya_produk' => $harga_beli,
                'harga_produk' => $harga_jual,
                'jumlah_produk' => $jumlah,
                'subtotal_produk' => $subtotal_jual,
            ]);

            // Kurangi Stock Produk itu
            $produk->stock_produk -= $jumlah;
            $produk->save();
        }
        Session::forget('keranjang');
    }
}

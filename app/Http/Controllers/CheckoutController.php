<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

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
}
}

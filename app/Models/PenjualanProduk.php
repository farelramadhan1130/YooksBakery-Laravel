<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanProduk extends Model
{
    use HasFactory;

    protected $table = 'penjualan_produk';

    protected $fillable = [
        'id_penjualan',
        'id_produk',
        'id_toko',
        'nama_produk',
        'biaya_produk',
        'harga_produk',
        'jumlah_produk',
        'subtotal_produk',
    ];

    // Tambahan kode lainnya sesuai kebutuhan, seperti relasi dengan model lain

}

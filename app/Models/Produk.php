<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'products'; // Nama tabel di database
    protected $primaryKey = 'id_produk';
    // Atur kolom yang dapat diisi (fillable)
    protected $fillable = [
        'id_produk',
        'id_toko',
        'kode_produk',
        'nama_produk',
        'biaya_produk',
        'jual_produk',
        'harga_coret',
        'stock_produk',
        'tanggal_produksi',
        'keterangan_produk',
        'foto_produk',
    ];

    // Atur tipe data kolom
    protected $casts = [
        'id_produk' => 'integer',
        'id_toko' => 'integer',
        'biaya_produk' => 'integer',
        'jual_produk' => 'integer',
        'harga_coret' => 'integer',
        'stock_produk' => 'integer',
        'tanggal_produksi' => 'date',
    ];
}

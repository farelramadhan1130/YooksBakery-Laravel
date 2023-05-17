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
        'nama',
        'biaya_produksi',
        'harga_jual',
        'harga_coret',
        'stok',
        'tgl_produksi',
        'keterangan',
        'tgl_kadaluarsa',
        'foto_produk',
        'deskripsi_produk',
    ];

    // Atur tipe data kolom
    protected $casts = [
        'id_produk' => 'integer',
        'id_toko' => 'integer',
        'biaya_produksi' => 'integer',
        'harga_jual' => 'integer',
        'harga_coret' => 'integer',
        'stok' => 'integer',
        'tgl_produksi' => 'date',
        'tgl_kadaluarsa' => 'date',
    ];
}

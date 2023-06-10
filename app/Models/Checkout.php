<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table = 'penjualan'; // Nama tabel checkout

    protected $fillable = [
        'id_toko',
        'id_user',
        'tanggal_penjualan',
        'tanggal_ambil_penjualan',
        'total_penjualan',
        'metode_pembayaran',
        'bukti',
        'status_pesanan'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'id_toko');
    }
}

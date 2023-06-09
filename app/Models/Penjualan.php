<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'id_user',
        'id_toko',
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

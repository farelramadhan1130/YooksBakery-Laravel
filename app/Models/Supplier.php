<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';

    protected $fillable = [
        'id_toko',
        'nama',
        'no_hp'
        // tambahkan kolom lain yang sesuai dengan struktur tabel supplier
    ];

    // tambahkan relasi atau metode lain yang diperlukan

    // ...
}

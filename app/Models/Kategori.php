<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'categories';
    
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'id_toko',
        'nama_kategori',
        'foto_kategori',
    ];

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'id_toko', 'id_toko');
    }
}

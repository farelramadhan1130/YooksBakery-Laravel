<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'id_produk',
        'quantity',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
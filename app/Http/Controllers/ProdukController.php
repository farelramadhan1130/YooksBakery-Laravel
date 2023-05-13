<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    //
    public function tampilProduk()
    {
        $produk = Produk::all();
        return view('user.tampilproduk')->with('produk', $produk);
    }
}

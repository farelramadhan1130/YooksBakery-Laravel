<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers;
use App\Models\Produk;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function masukkanKeKeranjang(Request $request)
{
    Session::start();
    $id_produk = $request->input('id_produk');
    $produk = Produk::where('id_produk', $id_produk)->first();

    if ($produk && $produk->stock_produk > 0) {
        if (!Session::has('keranjang.'.$id_produk)) {
            Session::put('keranjang.'.$id_produk, 1);
        } else {
            $jumlahdikeranjang = Session::get('keranjang.'.$id_produk);
            if ($produk->stock_produk > $jumlahdikeranjang) {
                Session::put('keranjang.'.$id_produk, $jumlahdikeranjang + 1);
            }
        }
    }
}
public function kurangiKeranjang(Request $request)
{
    $id_produk = $request->input('id_produk');

    if (session()->has('keranjang.'.$id_produk)) {
        if (session('keranjang.'.$id_produk) == 1) {
            session()->forget('keranjang.'.$id_produk);
        } else {
            session()->put('keranjang.'.$id_produk, session('keranjang.'.$id_produk) - 1);
        }
    }
}
public function tambahkanKeranjang(Request $request)
{
    $id_produk = $request->input('id_produk');
    $produk = Produk::where('id_produk', $id_produk)->first();

    if ($produk && $produk->stock_produk > 0) {
        if (!session()->has('keranjang.'.$id_produk)) {
            session()->put('keranjang.'.$id_produk, 1);
        } else {
            $jumlahdikeranjang = session()->get('keranjang.'.$id_produk);
            if ($produk->stock_produk > $jumlahdikeranjang) {
                session()->put('keranjang.'.$id_produk, $jumlahdikeranjang + 1);
            }
        }
    }
}

    public function tampilcart(){
        return view('user.tampilcart');
    }
    public function index()
    {
        
        $userId = auth()->id(); // Mendapatkan ID pengguna yang sedang masuk
    
        $cartItems = Cart::where('user_id', $userId)->with('produk')->get();
        $totalPrice = Cart::where('user_id', $userId)->sum('quantity');
        $produkItems = Produk::all();
        return view('user.cart', compact('cartItems', 'totalPrice', 'produkItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_produk' => 'required|exists:products,id_produk',
            'quantity' => 'required|integer|min:1',
        ]);

        $user_id = Auth::id();

        $cart = new Cart();
        $cart->user_id = $user_id;
        $cart->id_produk = $request->input('id_produk');
        $cart->quantity = $request->input('quantity');
        $cart->save();

        return redirect()->route('formkeranjang');
    }

    public function update(Request $request, $cart)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Cart::findOrFail($cart);

        $product->quantity = $request->input('quantity');
        $product->update();

        return redirect()->route('formkeranjang');
    }

    public function destroy($item)
{
    $cart = Cart::find($item);

    if (!$cart) {
        // Cart not found
        return redirect()->route('formkeranjang')->with('error', 'Cart not found.');
    }

    $cart->delete();

    return redirect()->route('formkeranjang')->with('success', 'Cart item has been removed.');
}
}

<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('produk')->get();
        $totalPrice = Cart::sum('quantity');
        $produkItems = Produk::all();
        return view('user.cart', compact('cartItems', 'totalPrice', 'produkItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_produk' => 'required|exists:products,id_produk',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = new Cart();
        $cart->id_produk = $request->input('id_produk');
        $cart->quantity = $request->input('quantity');
        $cart->save();

        return redirect()->route('formkeranjang');
    }

    public function update(Request $request, Cart $cart)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart->quantity = $request->input('quantity');
        $cart->save();

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

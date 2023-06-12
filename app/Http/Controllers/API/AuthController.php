<?php

namespace App\Http\Controllers\API;

use App\Models\Produk;
use App\Models\User;
use App\Models\Penjualan;
use App\Models\Checkout;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_user' => 'required',
            'alamat_user' => 'required',
            'telepon_user' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'confirm_password' => 'required|same:password_user'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada Kesalahan',
                'data' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $token = $user->createToken('auth_token')->plainTextToken;

        $success['token'] = $token;
        $success['nama_user'] = $user->nama_user;

        return response()->json([
            'success' => true,
            'message' => 'Sukses Register',
            'data' => $success
        ]);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $auth = Auth::user();
            $success['token'] = User::findOrFail($auth->id)->createToken('auth_token')->plainTextToken;
            $success['id_user'] = $auth->id;
            $success['nama_user'] = $auth->nama_user;
            $success['email'] = $auth->email;
            $success['password'] = $auth->password;

            return response()->json([
                'success' => true,
                'message' => 'Login sukses',
                'data' => $success
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Cek email dan password lagi',
                'data' => null
            ]);
        }
    }

    public function tampilmenu()
    {
        $products = Produk::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Produk',
            'data' => $products->toArray()
        ]);
    }

    public function checkout(Request $request)
    {
        // Validasi inputan dari user
        $request->validate([
            'id_user' => 'required',
            'id_toko' => 'required',
            'tanggal_penjualan' => 'required',
            'tanggal_ambil_penjualan' => 'required',
            'total_penjualan' => 'required',
            'metode_pembayaran' => 'required',
            'bukti' => 'required',
            'status_pesanan' => 'required',
        ]);

        // Buat penjualan baru
        $penjualan = Checkout::create([
            'id_user' => $request->input('id_user'),
            'id_toko' => $request->input('id_toko'),
            'tanggal_penjualan' => $request->input('tanggal_penjualan'),
            'tanggal_ambil_penjualan' => $request->input('tanggal_ambil_penjualan'),
            'total_penjualan' => $request->input('total_penjualan'),
            'metode_pembayaran' => $request->input('metode_pembayaran'),
            'bukti' => $request->input('bukti'),
            'status_pesanan' => $request->input('status_pesanan'),
        ]);

        // Jika penjualan berhasil dibuat, kembalikan respons
        if ($penjualan) {
            return response()->json(['message' => 'Checkout berhasil'], 200);
        } else {
            return response()->json(['message' => 'Checkout gagal'], 400);
        }
    }
}

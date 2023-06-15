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
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $auth = Auth::user();
            $success['token'] = User::findOrFail($auth->id)->createToken('auth_token')->plainTextToken;
            $success['id'] = $auth->id;
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
        // Simpan bukti pembayaran
        $file = $request->input('memek');
        $namaFile = $request->id_user . '.jpg';
        $tujuanUpload = 'asset/image/image-admin/bukti/' . $namaFile;

        //Mengkonversi data gambar dari base64 ke file gambar
        file_put_contents($tujuanUpload, base64_decode($file));

        // Buat penjualan baru
        $penjualan = new Checkout();
        $penjualan->id_user = $request->id_user;
        $penjualan->id_toko = $request->id_toko;
        $penjualan->tanggal_penjualan = $request->tanggal_penjualan;
        $penjualan->tanggal_ambil_penjualan = $request->tanggal_ambil_penjualan;
        $penjualan->total_penjualan = $request->total_penjualan;
        $penjualan->metode_pembayaran = $request->metode_pembayaran;
        $penjualan->bukti = $namaFile;
        $penjualan->status_pesanan = $request->status_pesanan;


        // Jika penjualan berhasil dibuat, kembalikan respons
        if ($penjualan->save()) {
            return response()->json(['message' => 'Checkout berhasil'], 200);
        } else {
            return response()->json(['message' => 'Checkout gagal'], 400);
        }
    }
}

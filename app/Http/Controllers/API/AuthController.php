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
        // Validasi inputan dari user
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'tanggal_penjualan' => 'required',
            'tanggal_ambil_penjualan' => 'required',
            'total_penjualan' => 'required',
            'metode_pembayaran' => 'required',
            'bukti' => 'required', // Validasi bukti pembayaran (disesuaikan dengan kebutuhan)
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada Kesalahan',
                'data' => $validator->errors()
            ], 400);
        }

        // Simpan bukti pembayaran
        $targetDir = 'asset/image/image-admin/bukti';
        $image = $request->input('bukti');
        $userId = $request->input('id_user');

        if (!file_exists($targetDir)) {
            // Create Upload Image Folder
            mkdir($targetDir, 0777, true);
        }

        // Set Random Image File Name With Time
        $date = date('dmY');
        $fileName = $userId . '_' . $date . '.jpeg';
        $targetPath = $targetDir . '/' . $fileName;

        if (file_put_contents($targetPath, base64_decode($image))) {
            // Buat penjualan baru
            $penjualan = new Checkout();
            $penjualan->id_user = $request->input('id_user');
            $penjualan->id_toko = 1;
            $penjualan->tanggal_penjualan = $request->input('tanggal_penjualan');
            $penjualan->tanggal_ambil_penjualan = $request->input('tanggal_ambil_penjualan');
            $penjualan->total_penjualan = $request->input('total_penjualan');
            $penjualan->metode_pembayaran = $request->input('metode_pembayaran');
            $penjualan->bukti = $fileName;
            $penjualan->status_pesanan = "Pending";
            $penjualan->save();

            // Jika penjualan berhasil dibuat, kembalikan respons
            if ($penjualan) {
                return response()->json(['message' => 'Checkout berhasil'], 200);
            } else {
                return response()->json(['message' => 'Checkout gagal'], 400);
            }
        } else {
            return response()->json(['message' => 'Gagal menyimpan bukti pembayaran'], 400);
        }
    }
}

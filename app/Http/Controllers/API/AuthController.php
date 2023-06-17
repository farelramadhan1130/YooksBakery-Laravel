<?php

namespace App\Http\Controllers\API;

use App\Models\Produk;
use App\Models\User;
use App\Models\Penjualan;
use App\Models\Checkout;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PenjualanProduk;
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

            'biaya_produk' => 'required',
            'harga_produk' => 'required',
            'nama_produk' => 'required',
            'jumlah_produk' => 'required',
            'id_produk' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada Kesalahan',
                'data' => $validator->errors()
            ]);
        }

        // Simpan bukti pembayaran
        $targetDir = 'asset/image/image-admin/bukti';
        $image = $request->input('bukti');
        $userId = $request->input('id_user');
        $tokoId = 1;
        $jumlahProduk = $request->input('jumlah_produk');
        $hargaProduk = $request->input('harga_produk');
        $produk = Produk::find($request->input('id_produk'));

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
            $penjualan = Checkout::create([
                'id_user' => $userId,
                'id_toko' => $tokoId,
                'tanggal_penjualan' => $request->input('tanggal_penjualan'),
                'tanggal_ambil_penjualan' => $request->input('tanggal_ambil_penjualan'),
                'total_penjualan' => $request->input('total_penjualan'),
                'metode_pembayaran' => $request->input('metode_pembayaran'),
                'bukti' => $fileName,
                'status_pesanan' => "Pending",
            ]);

            $penjualanproduk = PenjualanProduk::create([
                'id_penjualan' => $userId,
                'id_toko' => $tokoId,
                'id_produk' => $request->input('id_produk'),
                'nama_produk' => $request->input('nama_produk'),
                'biaya_produk' => $request->input('biaya_produk'),
                'harga_produk' => $request->input('harga_produk'),
                'jumlah_produk' => $request->input('jumlah_produk'),
                'subtotal_produk' => $jumlahProduk * $hargaProduk,
            ]);

            // Kurangi Stock Produk itu
            $produk->stock_produk -= $jumlahProduk;
            $produk->save();

            // Jika penjualan berhasil dibuat, kembalikan respons
            if ($penjualan && $penjualanproduk) {
                $data = [
                    'penjualan' => $penjualan->toArray(),
                    'penjualan_produk' => $penjualanproduk->toArray(),
                ];
                return response()->json([
                    'success' => true,
                    'message' => 'Checkout berhasil',
                    'data' => $data,
                ]);
            } else {
                $errorMessages = [];
                if (!$penjualan) {
                    $errorMessages[] = 'Gagal membuat data penjualan';
                }
                if (!$penjualanproduk) {
                    $errorMessages[] = 'Gagal membuat data penjualan produk';
                }
                if (method_exists($penjualan, 'getErrors')) {
                    $errorMessages = array_merge($errorMessages, $penjualan->getErrors());
                }
                if (method_exists($penjualanproduk, 'getErrors')){
                    $errorMessages = array_merge($errorMessages, $penjualanproduk->getErrors());
                }
                return response()->json([
                    'success' => false,
                    'message' => 'Checkout gagal',
                    'data' => $errorMessages,
                ]);
            }
        } else {
            return response()->json([
                'message' => 'Gagal menyimpan bukti pembayaran'
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenjualanController extends Controller
{
    public function checkout(Request $request)
    {
        // Validasi request
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'id_toko' => 'required',
            'tanggal_penjualan' => 'required|date',
            'tanggal_ambil_penjualan' => 'required|date',
            'total_penjualan' => 'required',
            'metode_pembayaran' => 'required',
            'bukti' => 'nullable|image',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 400);
        }

        // Upload bukti jika ada
        $bukti = null;
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $bukti = $file->store('bukti', 'public');
        }

        // Buat objek Penjualan
        $penjualan = Penjualan::create([
            'id_user' => $request->id_user,
            'id_toko' => $request->id_toko,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'tanggal_ambil_penjualan' => $request->tanggal_ambil_penjualan,
            'total_penjualan' => $request->total_penjualan,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti' => $bukti,
            'status_pesanan' => 'Pending',
        ]);

        // Response berhasil
        return response()->json([
            'success' => true,
            'message' => 'Checkout berhasil',
            'data' => $penjualan
        ], 200);
    }
}

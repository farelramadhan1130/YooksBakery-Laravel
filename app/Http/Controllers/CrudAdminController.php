<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class CrudAdminController extends Controller
{

//KATEGORI
        public function kategoriTambah()
        {
            return view('admin.kategori_tambah');
        }

        public function simpanKategori(Request $request)
        {
            $request->validate([
                'nama' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $id_toko = auth()->user()->id_toko;
            $nama = $request->nama;
            $foto = $request->file('foto');
            $namafoto = $foto->getClientOriginalName();
            $foto->move(public_path('asset/image/image-admin/kategori'), $namafoto);

            Kategori::create([
                'id_toko' => $id_toko,
                'nama_kategori' => $nama,
                'foto_kategori' => $namafoto,
            ]);

            return redirect()->route('datakategori')->with('success', 'Input data kategori berhasil.');
        }
        public function hapusKategori($id)
        {
            $kategori = Kategori::find($id);

            if (!$kategori) {
                return redirect()->route('datakategori')->with('error', 'Kategori tidak ditemukan.');
            }

            $kategori->delete();

            return redirect()->route('datakategori')->with('success', 'Kategori berhasil dihapus.');
        }
        
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->integer('id_kategori');
            $table->integer('id_supplier');
            $table->integer('id_toko');
            $table->string('kode_produk');
            $table->string('nama_produk');
            $table->integer('biaya_produk');
            $table->integer('jual_produk');
            $table->integer('harga_coret');
            $table->integer('stock_produk');
            $table->string('foto_produk');
            $table->text('keterangan_produk');
            $table->date('tanggal_produksi');
            $table->string('keterangan');
            $table->timestamps();
        });

        DB::table('products')->insert([
            'id_kategori'=>1,
            'id_supplier'=>1,
            'id_toko'=>1,
            'kode_produk' => 'RS001',
            'nama_produk' => 'Roti Selai Coklat',
            'biaya_produk' => 4000,
            'jual_produk' => 6000,
            'harga_coret' => 8000,
            'stock_produk' => 10,
            'foto_produk' => 'rotiselaicoklat.jpg',
            'keterangan_produk' => 'Roti lembut dengan lapisan selai coklat yang lezat',
            'tanggal_produksi' => '2023-05-13',
            'keterangan' => 'Belum Kadaluarsa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

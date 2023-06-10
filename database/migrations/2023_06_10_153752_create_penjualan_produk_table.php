<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanProdukTable extends Migration
{
    public function up()
    {
        Schema::create('penjualan_produk', function (Blueprint $table) {
            $table->increments('id_penjualan_produk');
            $table->unsignedBigInteger('id_penjualan');
            $table->unsignedInteger('id_produk');
            $table->unsignedBigInteger('id_toko');
            $table->string('nama_produk');
            $table->integer('biaya_produk');
            $table->integer('harga_produk');
            $table->integer('jumlah_produk');
            $table->integer('subtotal_produk');
            $table->timestamps();

            $table->foreign('id_penjualan')
                ->references('id')->on('penjualan')
                ->onDelete('cascade');

            // Tambahkan constraint foreign key untuk kolom id_produk dan id_toko jika diperlukan
            $table->foreign('id_produk')
                ->references('id_produk')->on('products')
                ->onDelete('cascade');
            
            $table->foreign('id_toko')
                ->references('id_toko')->on('toko')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('penjualan_produk');
    }
}

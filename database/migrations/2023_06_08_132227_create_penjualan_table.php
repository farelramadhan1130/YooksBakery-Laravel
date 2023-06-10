<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_toko');
            $table->datetime('tanggal_penjualan');
            $table->datetime('tanggal_ambil_penjualan');
            $table->integer('total_penjualan');
            $table->string('metode_pembayaran');
            $table->string('bukti')->nullable();
            $table->string('status_pesanan')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}

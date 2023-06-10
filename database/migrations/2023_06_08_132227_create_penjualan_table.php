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
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_toko');
            $table->datetime('tanggal_penjualan');
            $table->datetime('tanggal_ambil_penjualan');
            $table->integer('total_penjualan');
            $table->string('metode_pembayaran');
            $table->string('bukti')->nullable();
            $table->string('status_pesanan');
            $table->timestamps();

            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('id_toko')
                ->references('id_toko')->on('toko')
                ->onDelete('cascade');
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

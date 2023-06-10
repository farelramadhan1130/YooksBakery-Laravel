<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko', function (Blueprint $table) {
            $table->id('id_toko');
            $table->string('nama_toko');
            $table->text('alamat_toko');
        });

        // Insert initial data
        DB::table('toko')->insert([
            'id_toko' => 1,
            'nama_toko' => 'Yooks Bakery Pusat',
            'alamat_toko' => 'Jl. Melon 3 no. 5B, Krajan, Patrang, Kec. Patrang, Kabupaten Jember, Jawa Timur 68111',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id_kategori');
            $table->integer('id_toko');
            $table->string('nama_kategori');
            $table->string('foto_kategori');
            $table->timestamps();
        });

        $data = [
        [
            'id_toko'=>1,
            'nama_kategori'=>'Roti Selai',
            'foto_kategori'=>'kat-rotiselai.jpg',
            'created_at' => now(),
            'updated_at' => now()],
        [
            'id_toko'=>1,
            'nama_kategori'=>'Roti Isi',
            'foto_kategori'=>'kat-rotiisi.jpg',
            'created_at' => now(),
            'updated_at' => now()],
        [
            'id_toko'=>1,
            'nama_kategori'=>'Roti Sisir',
            'foto_kategori'=>'kat-rotisisir.jpg',
            'created_at' => now(),
            'updated_at' => now()],
        [
            'id_toko'=>1,
            'nama_kategori'=>'Donat',
            'foto_kategori'=>'kat-donat.jpg',
            'created_at' => now(),
            'updated_at' => now()]
        ];

       foreach ($data as $category) {
    DB::table('categories')->insert($category);
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

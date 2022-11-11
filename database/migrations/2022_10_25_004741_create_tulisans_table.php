<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTulisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tulisans', function (Blueprint $table) {
            $table->id();
            $table->string('tulisan_judul');
            $table->string('tulisan_isi');
            $table->string('tulisan_tanggal');
            $table->integer('tulisan_kategori_id');
            $table->string('tulisan_kategori_nama');
            $table->integer('tulisan_views');
            $table->string('tulisan_gambar');
            $table->integer('tulisan_pengguna_id');
            $table->string('tulisan_author');
            $table->integer('tulisan_img_slider');
            $table->string('tulisan_slug');
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
        Schema::dropIfExists('tulisans');
    }
}

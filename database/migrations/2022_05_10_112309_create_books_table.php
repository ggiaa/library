<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('slug');
            $table->string('penulis');
            $table->string('penerbit');
            $table->integer('jumlah_halaman');
            $table->integer('tahun_terbit');
            $table->string('genre');
            $table->text('sinopsis');
            $table->integer('stok');
            $table->string('gambar_sampul')->nullable(true);
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
        Schema::dropIfExists('books');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori');
            $table->string('nama_produk');
            $table->string('tipe_produk');
            $table->string('deskripsi_produk');
            $table->decimal('harga_produk', $precision = 10, $scale = 2);
            $table->integer('rating_produk');
            $table->timestamp('deleted_at', $precision = 0);
            $table->timestamps();

            $table->unique(['id_kategori']);
            $table->foreign('id_kategori')->references('id')->on('kategori_produk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}

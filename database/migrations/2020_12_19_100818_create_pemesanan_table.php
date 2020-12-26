<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_lengkap_pembeli');
            $table->string('no_hp_pembeli');
            $table->string('alamat_lengkap_pembeli');
            $table->string('keterangan');
            $table->decimal('total_transaksi', $precision = 11, $scale = 2);
            $table->string('status pemesanan');
            $table->timestamp('deleted_at', $precision = 0);
            $table->timestamps();

            $table->unique(['user_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}

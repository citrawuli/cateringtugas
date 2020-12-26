<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtransaksi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_pemesanan'); 
            $table->decimal('sub_total', $precision = 11, $scale = 2);
            $table->timestamp('deleted_at', $precision = 0);
            $table->timestamps();
                    
            $table->unique(['id_produk','id_pemesanan']);
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('id_pemesanan')->references('id')->on('pemesanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtransaksi');
    }
}

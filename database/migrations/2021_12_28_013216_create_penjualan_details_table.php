<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penjualan_id');
            $table->unsignedBigInteger('produk_id');
            $table->integer('qty');
            $table->date('tanggal');
            $table->string('nama_produk');
            $table->integer('harga');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('penjualan_id')->references('id')->on('penjualans');
            $table->foreign('produk_id')->references('id')->on('produks');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan_details');
    }
}

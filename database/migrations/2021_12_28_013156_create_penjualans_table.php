<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->unsignedBigInteger('pelanggan_id');
            $table->integer('harga');
            $table->integer('qty');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('pelanggan_id')->references('id')->on('pelanggans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}

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
        Schema::create('tr_d', function (Blueprint $table) {
            $table->id();
            $table->foreign('kode_trx')->references('kode_trx')->on('tr_h');
            $table->string('kode_barang', 20);
            $table->integer('jml_barang');
            $table->float('harga_barang');
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
        Schema::dropIfExists('tr_d');
    }
};

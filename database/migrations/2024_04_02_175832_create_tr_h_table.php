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
        Schema::create('tr_h', function (Blueprint $table) {
            $table->id();
            $table->string('kode_trx', 20);
            $table->string('lokasi_trx',50);
            $table->string('kode_sales', 10);
            $table->date('tgl_trx');
            $table->float('nominal_diskon');
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
        Schema::dropIfExists('tr_h');
    }
};

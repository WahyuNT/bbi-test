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
        Schema::create('m_sales', function (Blueprint $table) {
            $table->id();
            $table->foreign('kode_sales')->references('kode_sales')->on('tr_h');
            $table->string('nama', 200);
            $table->char('jns_kelamin',1);
            $table->date('tgl_bergabung');
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
        Schema::dropIfExists('m_sales');
    }
};

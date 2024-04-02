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
            $table->foreignId('kode_sales')->constrained('tr_h')->onDelete('cascade');
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

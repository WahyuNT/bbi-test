<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW top_kategori_terlaris AS
            SELECT mb.kategori, SUM(td.jml_barang) AS total_terjual
            FROM tr_d td
            INNER JOIN tr_h th ON td.kode_trx = th.id
            INNER JOIN m_barang mb ON td.kode_barang = mb.id
            WHERE YEAR(th.tgl_trx) = YEAR(CURDATE()) -- Filter untuk tahun berjalan
            GROUP BY mb.kategori
            ORDER BY total_terjual DESC
            LIMIT 3;
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS top_kategori_terjual;");
    }
};

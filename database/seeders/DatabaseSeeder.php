<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_sales')->insert([
            ['kode_sales' => 'sls_1', 'nama' => 'Wahyu', 'jns_kelamin' => 'L', 'tgl_bergabung' => '2024-04-01'],
            ['kode_sales' => 'sls_2', 'nama' => 'Andi', 'jns_kelamin' => 'L', 'tgl_bergabung' => '2024-03-21'],
            ['kode_sales' => 'sls_3', 'nama' => 'Nita', 'jns_kelamin' => 'P', 'tgl_bergabung' => '2024-03-21'],
        ]);

        DB::table('tr_h')->insert([
            ['kode_trx' => 'trx_1', 'lokasi_trx' => 'Jakarta', 'kode_sales' => 1, 'tgl_trx' => '2024-04-02', 'nominal_diskon' => 5.00],
            ['kode_trx' => 'trx_2', 'lokasi_trx' => 'Jakarta', 'kode_sales' => 2, 'tgl_trx' => '2024-04-03', 'nominal_diskon' => 15.00],
            ['kode_trx' => 'trx_3', 'lokasi_trx' => 'Jakarta', 'kode_sales' => 3, 'tgl_trx' => '2024-04-02', 'nominal_diskon' => 5.00],
            ['kode_trx' => 'trx_4', 'lokasi_trx' => 'Sleman', 'kode_sales' => 3, 'tgl_trx' => '2024-04-02', 'nominal_diskon' => 10.00],
            ['kode_trx' => 'trx_5', 'lokasi_trx' => 'Surabaya', 'kode_sales' => 2, 'tgl_trx' => '2024-04-03', 'nominal_diskon' => 13.00],
            ['kode_trx' => 'trx_6', 'lokasi_trx' => 'Surabaya', 'kode_sales' => 1, 'tgl_trx' => '2024-04-02', 'nominal_diskon' => 20.00],
            ['kode_trx' => 'trx_7', 'lokasi_trx' => 'Sleman', 'kode_sales' => 2, 'tgl_trx' => '2024-03-29', 'nominal_diskon' => 10.00],
        ]);

        DB::table('m_barang')->insert([
            ['kode_barang' => '001', 'nama' => 'Buku Gambar', 'kategori' => 'Buku', 'harga_barang' => 1000.00],
            ['kode_barang' => '002', 'nama' => 'Penghapus Putih', 'kategori' => 'Penghapus', 'harga_barang' => 2000.00],
            ['kode_barang' => '003', 'nama' => 'Pensil HB', 'kategori' => 'Pensil', 'harga_barang' => 3000.00],
            ['kode_barang' => '004', 'nama' => 'Penggaris 30CM', 'kategori' => 'Penggaris', 'harga_barang' => 4000.00],
            ['kode_barang' => '005', 'nama' => 'Pena Ungu', 'kategori' => 'Pena', 'harga_barang' => 1000.00],
            ['kode_barang' => '006', 'nama' => 'Lampu Belajar', 'kategori' => 'Lampu', 'harga_barang' => 20000.00],
        ]);

      
        DB::table('tr_d')->insert([
            ['kode_trx' => 1, 'kode_barang' => 1, 'jml_barang' => 10, 'harga_barang' => 10000.00],
            ['kode_trx' => 2, 'kode_barang' => 1, 'jml_barang' => 3, 'harga_barang' => 6000.00],
            ['kode_trx' => 3, 'kode_barang' => 3, 'jml_barang' => 1, 'harga_barang' => 3000.00],
            ['kode_trx' => 4, 'kode_barang' => 3, 'jml_barang' => 3, 'harga_barang' => 9000.00],
            ['kode_trx' => 5, 'kode_barang' => 5, 'jml_barang' => 2, 'harga_barang' => 40000.00],
            ['kode_trx' => 6, 'kode_barang' => 2, 'jml_barang' => 20, 'harga_barang' => 4000.00],
            ['kode_trx' => 7, 'kode_barang' => 4, 'jml_barang' => 1, 'harga_barang' => 4000.00],
        ]);
    }
}

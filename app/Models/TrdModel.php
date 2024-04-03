<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrdModel extends Model
{
    use HasFactory;
    protected $table = 'tr_d';

    public function trx()
    {
         return $this->belongsTo(TrhModel::class, 'kode_trx', 'id');
    }
    public function barang()
    {
         return $this->belongsTo(BarangModel::class, 'kode_barang', 'id');
    }
}

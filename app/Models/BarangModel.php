<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;
    protected $table = 'm_barang';
    
    public function trh()
    {
        return $this->hasMany(TrhModel::class, 'kode_barang', 'id');
    }
}

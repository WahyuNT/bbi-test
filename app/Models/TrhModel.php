<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrhModel extends Model
{
    use HasFactory;
    protected $table = 'tr_h';


    public function sales()
    {
         return $this->belongsTo(SalesModel::class, 'kode_sales', 'id');
    }
        public function trh()
    {
        return $this->hasMany(TrhModel::class, 'kode_trx', 'id');
    }
    
}

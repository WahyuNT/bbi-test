<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesModel extends Model
{
    use HasFactory;
    protected $table = 'm_sales';
    protected $fillable = ['kode_sales', 'nama', 'jns_kelamin', 'tgl_bergabung'];
    
    public function trh()
    {
        return $this->hasMany(TrhModel::class, 'kode_sales', 'id');
    }
}

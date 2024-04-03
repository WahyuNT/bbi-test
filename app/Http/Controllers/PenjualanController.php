<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\SalesModel;
use App\Models\TopKategoriModel;
use App\Models\TrdModel;
use App\Models\TrhModel;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(){
        $top = TopKategoriModel::all();
        $barang = BarangModel::all();
        $sales = SalesModel::all();
        $trd = TrdModel::all();
        $trh = TrhModel::all();
        


        return view('index')->with([
            'top'=> $top,
            'barang'=> $barang,
            'sales'=> $sales,
            'trd'=> $trd,
            'trh'=> $trh
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TopKategoriModel;
use Illuminate\Http\Request;

class TopKategoriController extends Controller
{
    public function index(){
        $top = TopKategoriModel::all();

        return view('index')->with('top', $top);
    }
}

<?php

namespace App\Http\Controllers;

use App\PesananDetail;
use App\Stock;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        $stocks = Stock::paginate(50)->sortBy('kode_barang');
        return view('homeusers', [
            "title" => "User"
        ], compact('stocks'));
    }


}
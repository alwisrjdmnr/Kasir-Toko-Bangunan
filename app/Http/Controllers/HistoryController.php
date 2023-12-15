<?php

namespace App\Http\Controllers;
use App\Stock;
use App\Pesanan;
use App\User;
use App\PesananDetail;
use Auth;
use Alert;
use Illuminate\Http\Request; 

class HistoryController extends Controller
{

    public function index()
    {
    	$pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get()->sortBy('tanggal');

    	return view('historys.indekss', [
            "title" => "User"
        ], compact('pesanans'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

     	return view('historys.detailsxx', [
            "title" => "User"
        ], compact('pesanan','pesanan_details'));
    }
    public function cetak_nota($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        return view('historys.cetak_notassssss', [
            "title" => "Nota"
        ], compact('pesanan','pesanan_details'));
    }

}

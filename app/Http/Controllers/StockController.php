<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;

class StockController extends Controller
{

    public function index()
    {
        return view('adminss', [
            "title" => "Admin"
        ]);
    }

    public function getStocks(Request $request)
    {
        if ($request->has('cari')) {
            $stocks = Stock::where('stock', 'nama', '%' . $request->search);
        } else {
            $stocks = Stock::all()->sortBy('kode_barang');
            return view('admins', [
                        "title" => "Admin"
                    ])->with('stocks', $stocks);
        }
    }

    public function save(Request $request)
    {
        $stock = new Stock;
        $stock->kode_barang = $request->input('kode_barang');
        $stock->nama_barang = $request->input('nama_barang');
        $stock->harga = $request->input('harga');
        $stock->merk = $request->input('merk');
        $stock->stok = $request->input('stok');
        $stock->satuan = $request->input('satuan');
        $stock->keterangan = $request->input('keterangan');

        $stock->save();

        return redirect('/admin');
    }

    public function update(Request $request, $id)
    {
        $stock = Stock::find($id);
        $input = $request->all();
        $stock->fill($input)->save();
        return redirect('/admin');
    }

    public function delete($id = null)
    {
        Stock::where(['id' => $id])->delete();
        return redirect()->back();
    }



}
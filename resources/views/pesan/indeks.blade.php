@extends('layouts.layuser')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-5">
        </div>
        <div class="col-md-12 mt-5">
            <a href="{{ url('user') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('user') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $stock->nama_barang }}</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <h2>{{ $stock->nama_barang }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>Harga</strong></td>
                                        <td>:</td>
                                        <td><strong>Rp. </strong>{{ number_format($stock->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Stock</strong></td>
                                        <td>:</td>
                                        <td>{{ number_format($stock->stok) }} <strong>{{ $stock->satuan }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Keterangan</strong></td>
                                        <td>:</td>
                                        <td>{{ $stock->keterangan }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td><strong>Jumlah Pesan</strong></td>
                                        <td>:</td>
                                        <td>
                                             <form method="post" action="{{ url('pesan') }}/{{ $stock->id }}" >
                                            @csrf
                                                <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Ke Kasir</button>
                                            </form>
                                        </td>
                                    </tr>
                                   
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.layuser')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-5">
        </div>
        <div class="col-md-12 mt-5">
            <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('user') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pembelian</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pembelian</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" align="right">
                    <h5>Print Nota : <a href="{{ url('cetak_nota') }}/{{ $pesanan->id }}" target="_blank" class="btn btn-primary" onclick=""><i class="fa fa-print"></i> Cetak</a>
                    </h5>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pembelian</h3>
                    @if(!empty($pesanan))

                    <p align="right">Tanggal Beli : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php $no = 1; ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan_detail->stock->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }}</td>
                                <td>Rp. {{ number_format($pesanan_detail->stock->harga) }}</td>
                                <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                
                            </tr>
                            @endforeach

                             <tr>
                                <td colspan="4" align="right"><strong>Total yang harus dibayar :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    @endif

                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
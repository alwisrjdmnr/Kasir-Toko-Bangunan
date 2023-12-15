@extends('layouts.lays')

@section('content')
    
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Barang</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Selamat Datang, {{ auth()->user()->name }}</h4>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-round ml-auto" class="pagination" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                    <i class="fa fa-plus"></i>
                                    Tambah Barang
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="table table-bordered table-striped table-hover" id="table">
                                    <thead class="table-info text-center">
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Kode Barang</th>
                                          <th scope="col">Nama Barang</th>
                                          <th scope="col">Harga</th>
                                          <th scope="col">Merk</th>
                                          <th scope="col">Stock</th>
                                          <th scope="col">Keterangan</th>
                                          <th scope="col">Opsi</th>
                                        </tr>
                                      </thead>
                                      <tbody class="text-center">

                                        @foreach($stocks as $stock)
                                              
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $stock->kode_barang }}</td>
                                            <td>{{ $stock->nama_barang }}</td>
                                            <td><strong>Rp.</strong> {{ number_format($stock->harga)}} <br></td>
                                            <td>{{ $stock->merk }}</td>
                                            <td>{{ $stock->stok }} <strong>{{ $stock->satuan }}</strong> <br></td>
                                            <td>{{ $stock->keterangan }}<br></td>
                                            <td width="16%" class="text-center">
                                                <a rel=" {{ $stock->id }} " rel1="stock" href="javascript:" class="btn btn-danger btn-xs" id="deleteStock">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </a>
                                            </td>
                                            @include('action')
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
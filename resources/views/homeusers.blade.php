@extends('layouts.layuser')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card mt-5">
              <div class="card-body">
                <h4 class="card-title"><strong>Pilih Barang</strong></h4>
                  <div class="table-responsive mt-3">
                    <table id="add-row" class="table table-bordered table-striped table-hover" id="table">
                      <thead class="table-info" align="center">
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
                      <tbody align="center">
                              @foreach($stocks as $stock)
                              
                              <tr>
                                  <td scope="row">{{ $loop->iteration }}</td>
                                  <td>{{ $stock->kode_barang }}</td>
                                  <td>{{ $stock->nama_barang }}</td>
                                  <td><strong>Harga :</strong> Rp. {{ number_format($stock->harga)}} <br></td>
                                  <td>{{ $stock->merk }}</td>
                                  <td> <strong>Stok :</strong> {{ $stock->stok }} {{ $stock->satuan }} <br></td>
                                  <td>{{ $stock->keterangan }}<br></td>
                                  
                                  <td><a href="{{ url('pesan') }}/{{ $stock->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pilih</a> </td>
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
@endsection


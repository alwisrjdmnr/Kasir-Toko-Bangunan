<!-- Awal Modal Ubah -->
<div class="modal fade modal" id="edit{{ $stock->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Ubah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::model($stocks, ['method' => 'patch', 'route' => ['stock.update', $stock->id] ]) !!}
                    <div class="mb-3">
                        {!! Form::label('nama_barang', 'Nama Barang') !!}
                        {!! Form::text('nama_barang', $stock->nama_barang, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('merk', 'Merk') !!}
                        {!! Form::text('merk', $stock->merk, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('harga', 'Harga') !!}
                        {!! Form::number('harga', $stock->harga, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('stok', 'Stock') !!}
                        {!! Form::number('stok', $stock->stok, ['class' => 'form-control']) !!}
                    </div>       
                    <div class="mb-3">
                        {!! Form::label('satuan', 'Satuan') !!}
                        {!! Form::text('satuan', $stock->satuan, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('keterangan', 'Keterangan') !!}
                        {!! Form::text('keterangan', $stock->keterangan, ['class' => 'form-control']) !!}
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-undo"></i>  Keluar</button>
                {{ Form::button('Update', ['class' => 'btn btn-success', 'type' => 'submit']) }}
                {!! Form::close() !!}
            </div>  
        </div>
    </div>
</div>
<!-- Akhir Modal Ubah -->

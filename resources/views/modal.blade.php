<!-- Awal Modal Tambah -->
<div class="modal fade modal" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Tambah Barang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => 'save']) !!}
                    <div class="mb-2">
                        {!! Form::label('kode_barang', 'Kode Barang') !!}
                        {!! Form::text('kode_barang', '', ['class' => 'form-control', 'placeholder' => 'Kode Barang', 'require']) !!}
                    </div>
                    <div class="mb-2">
                        {!! Form::label('nama_barang', 'Nama Barang') !!}
                        {!! Form::text('nama_barang', '', ['class' => 'form-control', 'placeholder' => 'Nama Barang', 'require']) !!}
                    </div>
                    <div class="mb-2">
                        {!! Form::label('harga', 'Harga') !!}
                        {!! Form::number('harga', '', ['class' => 'form-control', 'placeholder' => 'Harga Barang', 'require']) !!}
                    </div>
                    <div class="mb-2">
                        {!! Form::label('merk', 'Merk') !!}
                        {!! Form::text('merk', '', ['class' => 'form-control', 'placeholder' => 'Merk Barang', 'require']) !!}
                    </div>
                    <div class="mb-2">
                        {!! Form::label('stok', 'Stock') !!}
                        {!! Form::number('stok', '', ['min' => "0", 'class' => 'form-control', 'placeholder' => 'Qty', 'require']) !!}
                    </div>       
                    <div class="mb-2">
                        {!! Form::label('satuan', 'Satuan') !!}
                        {!! Form::text('satuan', '', ['class' => 'form-control', 'placeholder' => 'Satuan', 'require']) !!}
                    </div>
                    <div class="mb-2">
                        {!! Form::label('keterangan', 'Keterangan') !!}
                        {!! Form::text('keterangan', '', ['class' => 'form-control', 'placeholder' => 'Keterangan', 'require']) !!}
                    </div>                          
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-undo"></i>  Keluar</button>
                        <button type="submit" class="btn btn-success" name="bsimpan"><i class="fa fa-save"></i>  Simpan</button>
                {!! Form::close() !!}
            </div>                           
        </div>
    </div>
</div>
<!-- Akhir Modal Tambah -->
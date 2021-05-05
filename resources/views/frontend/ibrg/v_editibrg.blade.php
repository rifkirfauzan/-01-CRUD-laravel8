@extends('layout.v_template')
@section('title','Edit Data Barang')
@section('content')

<form action="/ibrg/update/{{ $ibrg->id_brg}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Nama_barang</label>
                    <input name="nama_barang" class="form-control" value="{{ $ibrg->nama_barang }}" readonly>
                    <div class="text-danger">
                        @error('nama_barang')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="jenis_barang">Pilih Jenis Barang</label>
                </div>
                <select class="custom-select" id="jenis_barang" name="jenis_barang">
                    <option selected>Silahkan pilih jenis barang</option>
                    <option value="Rumah_tangga">Rumah Tangga</option>
                    <option value="Elektronik">Eletronik</option>
                    <option value="Perkakas">Perkakas</option>
                </select>
                </div>

                <div class="form-group">
                    <label>Harga Barang</label>
                    <input name="harga_barang" class="form-control" value="{{ $ibrg->harga_barang }}">
                    <div class="text-danger">
                        @error('harga_barang')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="qty">Pilih Qty</label>
                </div>
                <select class="custom-select" id="qty" name="qty">
                    <option selected>Silahkan pilih qty</option>
                    <option value="<50"> <50 </option>
                    <option value=">50"> >50 </option>
                    <option value=">100"> >100 </option>
                     <option value=">200"> >200 </option>
                </select>
                </div>
                <br>

                <div class="col-sm-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm"> Simpan Data Barang</button>
                    </div>

                </div>
            </div>
        </div>

</form>

@endsection
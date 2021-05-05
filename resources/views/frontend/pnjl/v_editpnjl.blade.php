@extends('layout.v_template')
@section('title','Edit Data Penjualan')
@section('content')

<form action="/pnjl/update/{{ $pnjl->id_pnjl}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Nama_barang</label>
                    <input name="nama_barang" class="form-control" value="{{ $pnjl->nama_barang }}">
                    <div class="text-danger">
                        @error('nama_barang')
                        {{$message}}
                        @enderror
                    </div>
                </div>

             <div class="form-group">
                    <label>Nama_barang</label>
                    <input name="jumlah" class="form-control" value="{{ $pnjl->jumlah }}">
                    <div class="text-danger">
                        @error('jumlah')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ $pnjl->harga }}">
                    <div class="text-danger">
                        @error('harga')
                        {{$message}}
                        @enderror
                    </div>
                </div>

             <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" name="status">
                    </div>
                </div>
                  <label> Stok Habis </label>
                </div>

                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" name="status">
                    </div>
                </div>
                  <label> Stok Tersedia </label>
                </div>
                <br>

                <div class="col-sm-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm"> Simpan Data Penjualan</button>
                    </div>

                </div>
            </div>
        </div>

</form>

@endsection
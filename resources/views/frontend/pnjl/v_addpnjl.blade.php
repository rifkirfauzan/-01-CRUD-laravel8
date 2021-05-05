@extends('layout.v_template')
@section('title','Tambah Data Penjalan')
@section('content')

<form action="/pnjl/insert" method="post" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Nama_barang</label>
                    <input name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
                    <div class="text-danger">
                        @error('nama_barang')
                        {{$message}}
                        @enderror
                    </div>
                </div>

             
                 <div class="form-group">
                    <label>Jumlah</label>
                    <input name="jumlah" class="form-control" value="{{ old('jumlah') }}">
                    <div class="text-danger">
                        @error('jumlah')
                        {{$message}}
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ old('harga') }}">
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

                <div class="form-group">
                    <button class="btn btn-primary btn-sm"> Tambah Data Penjualan</button>
                </div>

            </div>
        </div>
    </div>

</form>
@endsection
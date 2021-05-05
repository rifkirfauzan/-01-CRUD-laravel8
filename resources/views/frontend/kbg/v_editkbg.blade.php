@extends('layout.v_template')
@section('title','Edit Data Gudang')
@section('content')

<form action="/kbg/update/{{ $kbg->id_kbg}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Nama_barang</label>
                    <input name="nama_barang" class="form-control" value="{{ $kbg->nama_barang }}" readonly>
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
                    <label>Jumlah Barang</label>
                    <input type="number" name="jumlah_barang" class="form-control" value="{{ $kbg->jumlah_barang }}">
                    <div class="text-danger">
                        @error('jumlah_barang')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <br>

                <div class="col-sm-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm"> Simpan Data Gudang</button>
                    </div>

                </div>
            </div>
        </div>

</form>

@endsection
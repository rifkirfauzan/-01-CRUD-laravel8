@extends('layout.v_template')
@section('title','Tambah Data Laporan')
@section('content')

<form action="/lpr/insert" method="post" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Rekap jumlah pembelian</label>
                    <input name="rkp_beli" class="form-control" value="{{ old('rkp_beli') }}">
                    <div class="text-danger">
                        @error('rkp_beli')
                        {{$message}}
                        @enderror
                    </div>
                </div>

             
                 <div class="form-group">
                    <label>Rekap jumlah penjualan</label>
                    <input name="rkp_jual" class="form-control" value="{{ old('rkp_jual') }}">
                    <div class="text-danger">
                        @error('rkp_jual')
                        {{$message}}
                        @enderror
                    </div>
                </div>

             <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="bulan">Pilih Bulan</label>
                </div>
                <select class="custom-select" id="bulan" name="bulan">
                    <option selected>Silahkan pilih bulan</option>
                    <option value="Januari"> Januari</option>
                    <option value="Februari"> Februari </option>
                    <option value="Maret"> Maret </option>
                    <option value="April"> April </option>
                    <option value="Mei"> Mei </option>
                    <option value="Juni"> Juni </option>
                    <option value="Juli"> Juli </option>
                    <option value="Agustus"> Agustus </option>
                    <option value="September"> September </option>
                    <option value="Oktober"> Oktober </option>
                    <option value="November"> November </option>
                    <option value="Desember"> Desember </option>
                </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm"> Tambah data laporan</button>
                </div>

            </div>
        </div>
    </div>

</form>
@endsection
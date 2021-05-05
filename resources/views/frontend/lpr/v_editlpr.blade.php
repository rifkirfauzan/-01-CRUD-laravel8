@extends('layout.v_template')
@section('title','Edit Data Laporan')
@section('content')

<form action="/lpr/update/{{ $laproran->id_lapor}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Rekap jumlah pembelian</label>
                    <input name="rkp_beli" class="form-control" value="{{ $laproran->rkp_beli }}">
                    <div class="text-danger">
                        @error('rkp_beli')
                        {{$message}}
                        @enderror
                    </div>
                </div>

             <div class="form-group">
                    <label>Rekap jumlah penjualan</label>
                    <input name="rkp_jual" class="form-control" value="{{ $laproran->rkp_jual }}">
                    <div class="text-danger">
                        @error('rkp_jual')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Bulan</label>
                    <input name="bulan" class="form-control" value="{{ $laproran->bulan }}">
                    <div class="text-danger">
                        @error('bulan')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <br>

                <div class="col-sm-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm"> Simpan data laporan</button>
                    </div>

                </div>
            </div>
        </div>

</form>

@endsection
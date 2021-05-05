@extends('layout.v_template')
@section('title','Edit Data Keuntungan')
@section('content')

<form action="/kpt/update/{{ $kpt->id_kpt}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Tahun</label>
                    <input name="tahun" class="form-control" value="{{ old('tahun') }}">
                    <div class="text-danger">
                        @error('tahun')
                        {{$message}}
                        @enderror
                    </div>
                </div>

             
                <div class="form-group">
                    <label>Penjualan tertinggi</label>
                    <input name="p_tertinggi" class="form-control" value="{{ old('p_tertinggi') }}">
                    <div class="text-danger">
                        @error('p_tertinggi')
                        {{$message}}
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <label>Penjualan terendah</label>
                    <input name="p_terendah" class="form-control" value="{{ old('p_terendah') }}">
                    <div class="text-danger">
                        @error('p_terendah')
                        {{$message}}
                        @enderror
                    </div>
                </div>


                    <div class="form-group">
                    <label>Keuntungan penjualan tahunan </label>
                    <input name="k_tahunan" class="form-control" value="{{ old('k_tahunan') }}">
                    <div class="text-danger">
                        @error('k_tahunan')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <br>

                <div class="col-sm-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm"> Simpan Data Keuntungan</button>
                    </div>

                </div>
            </div>
        </div>

</form>

@endsection
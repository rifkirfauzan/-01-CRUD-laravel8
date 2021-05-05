@extends('layout.v_template')
@section('title','Detail Keuntungan')
@section('content')


<div class="card" style="width: 30rem;">
  <div class="card-body">
    <table class="table">
    <tr>
        <th width="100px">Tahun</th>
        <th width="30px">:</th>
        <th>{{$kpt->tahun}}</th>
    </tr>
    <tr>
        <th width="100px">Penjualan tertinggi</th>
        <th width="30px">:</th>
        <th>{{$kpt->p_tertinggi}}</th>
    </tr>
    <tr>
        <th width="100px">Penjualan terendah</th>
        <th width="30px">:</th>
        <th>{{$kpt->p_terendah}}</th>
    </tr>

    <tr>
        <th width="100px">Keuntungan tahunan</th>
        <th width="30px">:</th>
        <th>{{$kpt->k_tahunan}}</th>
    </tr>

    <tr>
        <th>
            <a href="/kpt" class="btn btn-success tbn-sm">Kembali</a>
        </th>
    </tr>
    <button onclick="window.print();" class="noPrint">
        Print Halaman ini
    </button>
</table>
  </div>
</div>


@endsection
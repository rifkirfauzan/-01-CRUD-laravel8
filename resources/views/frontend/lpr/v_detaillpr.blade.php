@extends('layout.v_template')
@section('title','Detail Data Laporan')
@section('content')


<div class="card" style="width: 30rem;">
  <div class="card-body">
    <table class="table">
    <tr>
        <th width="100px">Rekap jumlah pembelian</th>
        <th width="30px">:</th>
        <th>{{$laporan->rkp_beli}}</th>
    </tr>
    <tr>
        <th width="100px">Rekap jumlah penjualan</th>
        <th width="30px">:</th>
        <th>{{$laporan->rkp_jual}}</th>
    </tr>
    <tr>
        <th width="100px">Bulan</th>
        <th width="30px">:</th>
        <th>{{$laporan->bulan}}</th>
    </tr>

    <tr>
        <th>
            <a href="/lpr" class="btn btn-success tbn-sm">Kembali</a>
        </th>
    </tr>
    <button onclick="window.print();" class="noPrint">
        Print Halaman ini
    </button>
</table>
  </div>
</div>


@endsection
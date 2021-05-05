@extends('layout.v_template')
@section('title','Detail Bayar')
@section('content')


<div class="card" style="width: 30rem;">
  <div class="card-body">
    <table class="table">
    <tr>
        <th width="100px">nama_barang</th>
        <th width="30px">:</th>
        <th>{{$ibrg->nama_barang}}</th>
    </tr>
    <tr>
        <th width="100px">jenis_barang</th>
        <th width="30px">:</th>
        <th>{{$ibrg->jenis_barang}}</th>
    </tr>
    <tr>
        <th width="100px">Qty</th>
        <th width="30px">:</th>
        <th>{{$ibrg->harga_barang}}</th>
    </tr>

    <tr>
        <th width="100px">Jml_tagihan</th>
        <th width="30px">:</th>
        <th>{{$ibrg->qty}}</th>
    </tr>

    <tr>
        <th>
            <a href="/ibrg" class="btn btn-success tbn-sm">Kembali</a>
        </th>
    </tr>
    <button onclick="window.print();" class="noPrint">
        Print Halaman ini
    </button>
</table>
  </div>
</div>


@endsection
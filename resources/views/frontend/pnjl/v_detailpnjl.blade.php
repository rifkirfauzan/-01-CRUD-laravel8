@extends('layout.v_template')
@section('title','Detail Data Penjualan')
@section('content')


<div class="card" style="width: 30rem;">
  <div class="card-body">
    <table class="table">
    <tr>
        <th width="100px">nama_barang</th>
        <th width="30px">:</th>
        <th>{{$pnjl->nama_barang}}</th>
    </tr>
    <tr>
        <th width="100px">jumlah</th>
        <th width="30px">:</th>
        <th>{{$pnjl->jumlah}}</th>
    </tr>
    <tr>
        <th width="100px">Qty</th>
        <th width="30px">:</th>
        <th>{{$pnjl->harga}}</th>
    </tr>

    <tr>
        <th width="100px">status</th>
        <th width="30px">:</th>
        <th>{{$pnjl->status}}</th>
    </tr>

    <tr>
        <th>
            <a href="/pnjl" class="btn btn-success tbn-sm">Kembali</a>
        </th>
    </tr>
    <button onclick="window.print();" class="noPrint">
        Print Halaman ini
    </button>
</table>
  </div>
</div>


@endsection
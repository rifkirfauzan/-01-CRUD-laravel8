@extends('layout.v_template')
@section('title','Detail Gudang')
@section('content')


<div class="card" style="width: 30rem;">
  <div class="card-body">
    <table class="table">
    <tr>
        <th width="100px">nama_barang</th>
        <th width="30px">:</th>
        <th>{{$kbg->nama_barang}}</th>
    </tr>
    <tr>
        <th width="100px">jenis_barang</th>
        <th width="30px">:</th>
        <th>{{$kbg->jenis_barang}}</th>
    </tr>
    <tr>
        <th width="100px">Qty</th>
        <th width="30px">:</th>
        <th>{{$kbg->jumlah_barang}}</th>
    </tr>

    <tr>
        <th>
            <a href="/kbg" class="btn btn-success tbn-sm">Kembali</a>
        </th>
    </tr>
    <button onclick="window.print();" class="noPrint">
        Print Halaman ini
    </button>
</table>
  </div>
</div>


@endsection
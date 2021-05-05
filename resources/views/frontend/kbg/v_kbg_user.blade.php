@extends('layout.v_template')
@section("js")
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src"{{asset('js')}}/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.dataTables.js"></script>
@endsection
@section('title','Halaman Ketersediaan barang gudang')
@section('content')

<h1>Ketersediaan Barang Gudang</h1>
    
<button class="btn btn-outline-primary" onclick="window.print();" >
<i class="fas fa-print">
 Print Halaman ini
    </i>
</button>
<table class="table table-bordered" id="myTable">
    <thead>
            <tr>
                 <th> No </th>
                 <th> Nama Barang </th>
                 <th> Jenis Barang </th>
                 <th> Jumlah barang </th>
              
            </tr>
    </thead>         
       <?php $no = 1; ?>
<tbody>
        @foreach ( $kbg as $data )
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$data->nama_barang}}</td>
            <td>{{$data->jenis_barang}}</td>
            <td>{{$data->jumlah_barang}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
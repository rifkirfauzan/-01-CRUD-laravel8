@extends('layout.v_template')
@section("js")
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src"{{asset('js')}}/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.dataTables.js"></script>
@endsection
@section('title','Input Data Barang')
@section('content')

<h1>Data Barang</h1>
    
    
@if(session('pesan'))
<div class="alert alert-primary" role="alert">
  Data Barang Berhasil Ditambahkan
</div>
@endif
<a href="/ibrg/add"  class="btn btn-outline-primary">input data</a>
<button class="btn btn-outline-primary" onclick="window.print();" >
<i class="fas fa-print">
 Print Halaman ini
    </i>
</button>
<table class="table table-bordered" id="myTable">
    <thead>
            <tr>
                 <th> No </th>
                 <th> Nama_barang </th>
                 <th> Jenis_barang </th>
                 <th> Harga_barang </th>
                 <th> Qty </th>
                 <th> Aksi </th>
            </tr>
    </thead>         
       <?php $no = 1; ?>
<tbody>
        @foreach ( $ibrg as $data )
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$data->nama_barang}}</td>
            <td>{{$data->jenis_barang}}</td>
            <td>{{$data->harga_barang}}</td>
            <td>{{$data->qty}}</td>
            <td>
                <a href="/ibrg/detail/{{ $data->id_brg}}" class="btn btn-sm btn-primary">Detail</a>
                <a href="/ibrg/edit/{{ $data->id_brg}}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_brg}}">
                        Delete
                    </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach($ibrg as $data)

<!-- Start Modal -->

<div class="modal fade" id="delete{{ $data->id_brg}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $data->nama_barang}}</h4>
                <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="/ibrg/delete/{{ $data->id_brg}}" class="fas fa-minus-circle">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
<!-- /.modal -->


@endsection
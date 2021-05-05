@extends('layout.v_template')
@section("js")
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src"{{asset('js')}}/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.dataTables.js"></script>
@endsection
@section('title','Input Data Penjualan')
@section('content')

<h1>Data Penjualan</h1>
    
    
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
                 <th> Jumlah </th>
                 <th> Harga </th>
                 <th> Status </th>
                 <th> Aksi </th>
            </tr>
    </thead>         
       <?php $no = 1; ?>
<tbody>
        @foreach ( $pnjl as $data )
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$data->nama_barang}}</td>
            <td>{{$data->jumlah}}</td>
            <td>{{$data->harga}}</td>
            <td>{{$data->status}}</td>
            <td>
                <a href="/pnjl/detail/{{ $data->id_pnjl}}" class="btn btn-sm btn-primary">Detail</a>
                <a href="/pnjl/edit/{{ $data->id_pnjl}}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_pnjl}}">
                        Delete
                    </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach($pnjl as $data)

<!-- Start Modal -->

<div class="modal fade" id="delete{{ $data->id_pnjl}}">
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
                <a href="/pnjl/delete/{{ $data->id_pnjl}}" class="fas fa-minus-circle">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
<!-- /.modal -->


@endsection
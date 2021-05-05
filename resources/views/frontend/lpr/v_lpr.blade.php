@extends('layout.v_template')
@section("js")
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src"{{asset('js')}}/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.dataTables.js"></script>
@endsection
@section('title','Input Laporan')
@section('content')

<h1>Laporan</h1>
    
    
@if(session('pesan'))
<div class="alert alert-primary" role="alert">
  Data Laporan Berhasil Ditambahkan
</div>
@endif
<a href="/lpr/add"  class="btn btn-outline-primary">input data</a>
<button class="btn btn-outline-primary" onclick="window.print();" >
<i class="fas fa-print">
 Print Halaman ini
    </i>
</button>
<table class="table table-bordered" id="myTable">
    <thead>
            <tr>
                 <th> No </th>
                 <th> Rekap jumlah pembelian </th>
                 <th> Rekap jumlah penjualan </th>
                 <th> Bulan </th>
                 <th> Aksi </th>
            </tr>
    </thead>         
       <?php $no = 1; ?>
<tbody>
        @foreach ( $laporan as $data )
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$data->rkp_beli}}</td>
            <td>{{$data->rkp_jual}}</td>
            <td>{{$data->bulan}}</td>
             <td>
                <a href="/lpr/detail/{{ $data->id_lapor}}" class="btn btn-sm btn-primary">Detail</a>
                <a href="/lpr/edit/{{ $data->id_lapor}}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_lapor}}">
                        Delete
                    </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach($laporan as $data)

<!-- Start Modal -->

<div class="modal fade" id="delete{{ $data->id_lapor}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $data->rkp_beli}}</h4>
                <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="/lpr/delete/{{ $data->id_lapor}}" class="fas fa-minus-circle">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
<!-- /.modal -->


@endsection
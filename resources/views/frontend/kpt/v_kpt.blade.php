@extends('layout.v_template')
@section("js")
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src"{{asset('js')}}/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.dataTables.js"></script>
@endsection
@section('title','Input Data Keuntungan tahunan')
@section('content')

<h1>Keuntungan penjualan tahunan</h1>
    
    
@if(session('pesan'))
<div class="alert alert-primary" role="alert">
  Data Barang Berhasil Ditambahkan
</div>
@endif
<a href="/kpt/add"  class="btn btn-outline-primary">input data</a>
<button class="btn btn-outline-primary" onclick="window.print();" >
<i class="fas fa-print">
 Print Halaman ini
    </i>
</button>
<table class="table table-bordered" id="myTable">
    <thead>
            <tr>
                 <th> No </th>
                 <th> Tahun </th>
                 <th> Penjualan Tertinggi </th>
                 <th> Penjualan Terendah </th>
                 <th> Keuntungan Penjualan Tahunan </th>
                 <th> Aksi </th>
            </tr>
    </thead>         
       <?php $no = 1; ?>
<tbody>
        @foreach ( $kpt as $data )
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$data->tahun}}</td>
            <td>{{$data->p_terendah}}</td>
            <td>{{$data->p_tertinggi}}</td>
            <td>{{$data->k_tahunan}}</td>
            <td>
                <a href="/kpt/detail/{{ $data->id_kpt}}" class="btn btn-sm btn-primary">Detail</a>
                <a href="/kpt/edit/{{ $data->id_kpt}}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_kpt}}">
                        Delete
                    </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach($kpt as $data)

<!-- Start Modal -->

<div class="modal fade" id="delete{{ $data->id_kpt}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $data->tahun}}</h4>
                <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="/kpt/delete/{{ $data->id_kpt}}" class="fas fa-minus-circle">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
<!-- /.modal -->


@endsection
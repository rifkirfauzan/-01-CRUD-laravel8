@extends('layout.v_template')
@section("js")
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src"{{asset('js')}}/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.dataTables.js"></script>
@endsection
@section('title','Halaman Keuntungan tahunan')
@section('content')

<h1>Keuntungan tahunan</h1>
    
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
                 <th> Keuntungan penjalan tahunan </th>
              
            </tr>
    </thead>         
       <?php $no = 1; ?>
<tbody>
        @foreach ( $kpt as $data )
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$data->tahun}}</td>
            <td>{{$data->p_tertinggi}}</td>
            <td>{{$data->p_terendah}}</td>
            <td>{{$data->k_tahunan}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
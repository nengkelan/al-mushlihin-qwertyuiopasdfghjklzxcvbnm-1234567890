@extends('layouts.general')

@section('atas')
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
 <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection


@section('isi')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pengumuman</h2>
            </div>
            <div class="pull-right">
                @can('pengumuman-create')
                <a class="btn btn-success" href="{{ route('pengumumans.create') }}"> Create New Pengumuman</a>
                @endcan
            </div>
        </div>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
         <p>{{ $message }}</p>
        </div>
@endif

<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
        </tr>
    </thead>
</table>
@endsection


@section('bawah')
 <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(function() {
        var oTable = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('get.pengumuman') }}',
            columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'detail', name: 'detail', orderable: false},/*
            {data: 'kategori', name: 'kategori', orderable: false, searchable: false},*/
        ],
        });
    });
</script>
@endsection
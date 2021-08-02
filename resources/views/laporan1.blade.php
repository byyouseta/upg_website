@extends('layouts.app2')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('judul')
    Laporan
@endsection
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/laporan/masuk" class="btn btn-primary"><i class="fa fa-toggle-down"></i> Masuk</a>
                <a href="/laporan/proses" class="btn btn-warning"><i class="fa fa-toggle-right "></i> Proses</a>
                <a href="/laporan/selesai" class="btn btn-success"><i class="fa fa-check-square-o"></i> Selesai</a>
                {{-- <h3 class="box-title">Belum Diproses</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No Pelaporan</th>
                            <th>Nama Pembuat</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $laporan)
                            <tr>
                                <td>{{ $laporan->id }}</td>
                                <td>{{ $laporan->user->name }}
                                </td>
                                <td>{{ $laporan->created_at }}</td>
                                <td>
                                    @if ($laporan->status == 0)
                                        <span class="label label-danger"> Pelaporan </span>
                                    @elseif($laporan->status == 1)
                                        <span class="label label-warning">Ditangani</span>
                                    @else
                                        <span class="label label-success">Selesai</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/laporan/detail/{{ Crypt::encrypt($laporan->id) }}"
                                            class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Detail Laporan">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Maaf Data Kosong</td>
                            </tr>
                        @endforelse
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

@endsection
@section('plugin')
<!-- DataTables -->
<script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
@endsection

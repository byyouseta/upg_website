@extends('layouts.app2')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('judul')
    History Pelaporan
@endsection
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                {{-- <h3 class="box-title">Belum Diproses</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No Pengaduan</th>
                            <th>Jenis Pelaporan</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Update Terakhir</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $index => $lapor)
                            <tr>
                                <td>{{ $lapor->id }}</td>
                                <td>{{ $lapor->pelaporan->jenis }}</td>
                                <td>{{ \Carbon\Carbon::parse($lapor->created_at)->isoFormat('D-M-Y h:mm:ss') }}
                                </td>
                                <td>{{ \Carbon\Carbon::parse($lapor->updated_at)->isoFormat('D-M-Y h:mm:ss') }}</td>
                                <td>
                                    @if ($lapor->status == 0)
                                        <span class="label label-danger"> Pelaporan </span>
                                    @elseif($lapor->status == 1)
                                        <span class="label label-warning">Ditangani</span>
                                    @else
                                        <span class="label label-success">Selesai</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/lapor/detail/{{ Crypt::encrypt($lapor->id) }}"
                                            class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Detail Laporan">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Data Pengajuan Kosong</td>
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

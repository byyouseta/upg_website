@extends('layouts.app2')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }

    </style>
@endsection
@section('judul')
    Master Kode Peristiwa
@endsection
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus-circle"></i> Tambah</a>
                    {{-- <h3 class="box-title">Jenis Pelaporan</h3> --}}
                </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Peristiwa Penerimaan Gratifikasi</th>
                            <th>Deskripsi</th>
                            <th>Tanggal dibuat</th>
                            <th>Update Terakhir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peristiwa as $index => $data)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->created_at)->isoFormat('D-M-Y h:mm:ss') }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->updated_at)->isoFormat('D-M-Y h:mm:ss') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/peristiwa/edit/{{ Crypt::encrypt($data->id) }}"
                                            class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Ubah">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="/peristiwa/delete/{{ Crypt::encrypt($data->id) }}"
                                            class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Hapus">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Kode Peristiwa</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/peristiwa/store">
                        @csrf
                        <div class="form-group">
                            <label>Nama Peristiwa Penerimaan Gratifikasi</label>
                            <input type="text" class="form-control" name="nama">
                            @error('nama')
                                <span class="invalid-feedback text-red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi"></textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback text-red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                    <button type="Submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
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

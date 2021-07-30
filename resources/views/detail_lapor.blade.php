@extends('layouts.app2')

@section('judul')
    Detail Pengaduan
@endsection
@section('content')
    <div class="col">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <a href="/history/pelaporan" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                    {{-- <h3 class="box-title">Detail Pengaduan</h3> --}}
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nomor Pelaporan</th>
                            <td>{{ $data->id }}</td>
                            <th>Dilaporkan Pada</th>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Pelaporan</th>
                            <td>{{ $data->pelaporan->jenis }}</td>
                            <th>Jenis Penerimaan</th>
                            <td>{{ $data->penerimaan->jenis }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Peristiwa Penerimaan</th>
                            <td>{{ $data->peristiwa->nama }}</td>
                            <th>Pemberi Gratifikasi</th>
                            <td>{{ $data->nama_pemberi }}</td>
                        </tr>
                        <tr>
                            <th>Nilai /Harga Taksiran</th>
                            <td>{{ $data->nilai }}</td>
                            <th>Dokumen yang dilampirkan</th>
                            <td>{{ $data->dokumen }}</td>
                        </tr>
                        <tr>
                            <th>Uraian </th>
                            <td colspan="3">{{ $data->uraian_peristiwa }}</td>
                        </tr>
                        <tr>
                            <th>Balasan </th>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th>Status </th>
                            <td>
                                @if ($data->status == 0)
                                    <span class="label label-danger"> Pelaporan </span>
                                @elseif($data->status == 1)
                                    <span class="label label-warning">Ditangani</span>
                                @else
                                    <span class="label label-success">Selesai</span>
                                @endif
                            </td>
                            <th>Status Akhir</th>
                            <td></td>
                        </tr>


                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

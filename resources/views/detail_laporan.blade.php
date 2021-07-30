@extends('layouts.app2')

@section('judul')
    Detail Pelaporan
@endsection
@section('content')
    <div class="col">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <a href="/laporan" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                    {{-- <h3 class="box-title">Detail Pengaduan</h3> --}}
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>No Pelaporan</th>
                            <td>{{ $data->id }}</td>
                            <th>Nama Pembuat</th>
                            <td>{{ $data->user->name }}</td>
                            <th>Dilaporkan Pada</th>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Pelaporan</th>
                            <td>{{ $data->pelaporan->jenis }}</td>

                            <th>Jenis Penerimaan</th>
                            <td>{{ $data->penerimaan->jenis }}</td>
                            <th>Peristiwa Penerimaan</th>
                            <td>{{ $data->peristiwa->nama }}</td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td>{{ $data->ktp }}</td>
                            <th>Nama Instansi</th>
                            <td>{{ $data->instansi }}</td>
                            <th>Unit Kerja</th>
                            <td>{{ $data->unit }}</td>
                        </tr>
                        <tr>
                            <th>Alamat Instansi</th>
                            <td>{{ $data->alamat_kantor }}</td>
                            <th>Telepon Instansi</th>
                            <td>{{ $data->telp_kantor }}</td>
                            <th>No Telp/HP</th>
                            <td>{{ $data->user->nohp }}</td>
                        </tr>
                        <tr>
                            <th>Nama Pemberi</th>
                            <td>{{ $data->nama_pemberi }}</td>
                            <th>Alamat Pemberi</th>
                            <td>{{ $data->alamat_pemberi }}</td>
                            <th>Hubungan</th>
                            <td>{{ $data->hubungan }}</td>
                        </tr>
                        <tr>
                            <th>Nilai Taksiran</th>
                            <td>@currency($data->nilai)</td>
                            <th>Tempat Penerimaan</th>
                            <td>{{ $data->tempat_terima }}</td>
                            <th>Tanggal Penerimaan</th>
                            <td>{{ $data->tgl_terima }}</td>
                        </tr>
                        <tr>
                            <th>Alasan pemberian </th>
                            <td colspan="5">{{ $data->alasan }}</td>
                        </tr>
                        <tr>
                            <th>Kronologi Penerimaan </th>
                            <td colspan="5">{{ $data->kronologi }}</td>
                        </tr>
                        <tr>
                            <th>File (Jika Ada) </th>
                            <td colspan="5"><a href="/laporan/bukti/{{ $data->file_bukti }}" target="new_tab"> <span
                                        class="label label-success">Lihat File</span></a></td>
                        </tr>
                        <tr>
                            <th>Status Akhir</th>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <th>Balasan</th>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <th>Status </th>
                            <td colspan="5">
                                @if ($data->status == 0)
                                    <span class="label label-danger"> Pelaporan </span>
                                @elseif($data->status == 1)
                                    <span class="label label-warning">Ditangani</span>
                                @else
                                    <span class="label label-success">Selesai</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Aksi</th>
                            <td colspan="5"></td>
                        </tr>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

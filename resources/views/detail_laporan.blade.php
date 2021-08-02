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
                            <td colspan="5">
                                @if ($data2->status == 1)
                                    <span class="label label-warning">Sedang Diproses UPG</span>
                                @elseif($data2->status == 2)
                                    <span class="label label-warning">Diteruskan ke UPG Pusat</span>
                                @elseif($data2->status == 3)
                                    <span class="label label-warning"> Diteruskan ke KPK</span>
                                @else
                                    <span class="label label-success">Selesai</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Balasan</th>
                            <td colspan="5">{{ $data2->catatan }}</td>
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
                            <td>
                                @if ($data->status != 2)
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-aksi">
                                        Ambil Aksi
                                    </button>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-default" data-toggle="modal"
                                    data-target="#modal-profil">
                                    Lihat Detail Pengguna
                                </button>
                            </td>
                        </tr>

                    </table>
                </div>
                <!-- /.box-body -->
                <div class="modal fade" id="modal-aksi">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Set Status Pelaporan</h4>
                            </div>
                            <form action="/catatan/{{ $data->id }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="">Pilih Status</option>
                                            <option value="1">Sedang Diproses UPG</option>
                                            <option value="2">Diteruskan ke UPG Pusat</option>
                                            <option value="3">Diteruskan ke KPK</option>
                                            <option value="4">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Balasan</label>
                                        <textarea class="form-control" rows="3" placeholder="Isikan catatan disini"
                                            name="catatan"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left"
                                        data-dismiss="modal">Tutup</button>
                                    <button type="Submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade" id="modal-profil">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Profil Pelapor {{ $data->user->name }}</h4>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th> Tanggal Request </th>
                                            <td>{{ $data->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <th> Email Pengguna </th>
                                            <td>{{ $data->user->email }}</td>
                                        </tr>
                                        <tr>
                                            <th> Kontak Pengguna </th>
                                            <td>{{ $data->user->nohp }}</td>
                                        </tr>
                                        <tr>
                                            <th> Alamat </th>
                                            <td>{{ $data->user->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th> Bagian </th>
                                            <td>{{ $data->unit }}</td>
                                        </tr>
                                        <tr>
                                            <th> Instansi </th>
                                            <td> {{ $data->instansi }}</td>
                                        </tr>
                                        <tr>
                                            <th> No NIK </th>
                                            <td>{{ $data->ktp }}</td>
                                        </tr>
                                        <tr>
                                            <th> Terakhir Update </th>
                                            <td>{{ $data->user->updated_at }}</td>
                                        </tr>
                                        <tr>
                                            <th> Status </th>
                                            <td>
                                                @if (is_null($data->user->deleted_at))
                                                    <span class="label label-success">Aktif</span>
                                                @else
                                                    <span class="label label-danger">Tidak Aktif</span>
                                                @endif
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                                {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
    </div>
@endsection

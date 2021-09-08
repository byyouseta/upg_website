<!-- Menghubungkan dengan view template master -->
@extends('layouts.app2')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Unggah Laporan')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
    <div class="col">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Pelaporan Manual</h3>
                </div>
                @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <!-- /.box-header -->
                <form role="form" action="/lapor/manual/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="col-md-6">

                            <!-- text input -->
                            <div class="form-group">
                                <label>Jenis Pelaporan</label>
                                <select class="form-control" name="jenis_pelaporan" id="pelaporan">
                                    <option value="">Pilih</option>
                                    @foreach ($data as $pelaporan)
                                        <option value="{{ $pelaporan->id }}">
                                            {{ $pelaporan->jenis }}</option>
                                    @endforeach
                                </select>
                                @error('jenis_pelaporan')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Unggah Dokumen</label>
                                <input type="file" id="exampleInputFile" name="file">
                                <p class="help-block">File yang dapat diupload adalah file pdf dengan max file 2MB
                                </p>

                                @error('file')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <p class="help-block">* Jika Anda belum memiliki formulir pelaporan manual, bisa Anda
                                    unduh di <a href="/formulir" target="new_tab"> <i class="fa  fa-download"></i> Sini </a>
                                </p>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Email Pengguna</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->nik }}" disabled>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group align-end">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Unggah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

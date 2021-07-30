@extends('layouts.app2')
@section('judul')
    Master Jenis Pelaporan
@endsection
@section('content')
    <div class="col-xs-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Jenis Pelaporan</h3>

            </div>
            <div class="box-body">
                <form method="POST" action="/pelaporan/update/{{ $data->id }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Jenis pelaporan</label>
                        <input type="text" class="form-control" name="jenis" value="{{ $data->jenis }}">
                        @error('jenis')
                            <span class="invalid-feedback text-red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi">{{ $data->deskripsi }}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback text-red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
            <div class="box-footer">
                <a href="/pelaporan" class="btn btn-default">Tutup</a>
                <button type="Submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
@endsection

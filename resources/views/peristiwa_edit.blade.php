@extends('layouts.app2')
@section('judul')
    Master Kode Peristiwa
@endsection
@section('content')
    <div class="col-xs-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Kode Peristiwa</h3>

            </div>
            <div class="box-body">
                <form method="POST" action="/peristiwa/update/{{ $data->id }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Peristiwa</label>
                        <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
                        @error('nama')
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
                <a href="/peristiwa" class="btn btn-default">Tutup</a>
                <button type="Submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
@endsection

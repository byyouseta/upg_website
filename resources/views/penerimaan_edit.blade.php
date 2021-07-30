@extends('layouts.app2')
@section('judul')
    Master Jenis Penerimaan
@endsection
@section('content')
    <div class="col-xs-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Jenis Penerimaan</h3>

            </div>
            <div class="box-body">
                <form method="POST" action="/penerimaan/update/{{ $penerimaan->id }}">
                    @csrf
                    <!-- select -->
                    <div class="form-group">
                        <label>Jenis Pelaporan</label>
                        <select class="form-control" name="jenis_pelaporan">
                            <option value="">Pilih</option>
                            @foreach ($data as $pelaporan)
                                <option value="{{ $pelaporan->id }}" @if ($penerimaan->pelaporan_id == $pelaporan->id) selected @endif>
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
                        <label>Nama Jenis Penerimaan</label>
                        <input type="text" class="form-control" name="jenis" value="{{ $penerimaan->jenis }}">
                        @error('jenis')
                            <span class="invalid-feedback text-red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
            <div class="box-footer">
                <a href="/penerimaan" class="btn btn-default" data-dismiss="modal">Tutup</a>
                <button type="Submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
@endsection

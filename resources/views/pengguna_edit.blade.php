@extends('layouts.app2')

@section('judul')
    Profil {{ Auth::user()->name }}
@endsection
@section('content')
    <div class="col">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Profile</h3>
                </div>
                @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                @endif
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-6">
                        <form role="form" action="/pengguna/update/{{ $data->id }}" method="POST">
                            @csrf
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <input type="text" class="form-control" value="{{ $data->name }}" name="nama">
                                @error('nama')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" class="form-control" value="{{ $data->nohp }}" name="nohp">
                                @error('nohp')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat">{{ $data->alamat }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group align-end">
                                <a href="/pengguna" class="btn btn-default">Kembali</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Level User</label>
                            <select class="form-control" name="level">
                                <option value="">Pilih</option>
                                <option value="0" @if ($data->level == 0) selected @endif>User</option>
                                <option value="1" @if ($data->level == 1) selected @endif>Admin</option>
                            </select>
                            @error('level')
                                <span class="invalid-feedback text-red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email Pengguna</label>
                            <input type="text" class="form-control" value="{{ $data->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Update Terakhir</label>
                            <input type="text" class="form-control"
                                value="{{ \Carbon\Carbon::parse(Auth::user()->updated_at)->isoFormat('D-M-Y h:mm:s') }}"
                                disabled>
                        </div>

                        </form>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

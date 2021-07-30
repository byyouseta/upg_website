@extends('layouts.app2')

@section('judul')
    Password
@endsection
@section('content')
    <div class="col">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ubah Password</h3>
                </div>
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
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-6">
                        <form role="form" action="/password/update/{{ Auth::user()->id }}" method="POST">
                            @csrf
                            <!-- text input -->
                            <div class="form-group">
                                <label>Password Lama</label>
                                <input type="password" class="form-control" name="old_password">
                                @error('old_password')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" class="form-control" name="password">
                                @error('password')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" name="password_confirmation">
                                @error('password')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group align-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Email Pengguna</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Update Terakhir</label>
                            <input type="text" class="form-control"
                                value="{{ \Carbon\Carbon::parse(Auth::user()->updated_at)->isoFormat('D-M-Y h:mm:ss') }}"
                                readonly>
                        </div>

                        </form>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

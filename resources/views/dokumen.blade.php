<!-- Menghubungkan dengan view template master -->
@extends('layouts.app2')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Manual Sistem')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
    <div class="col-xs-12">
        <div class="box">
            @if (Auth::user()->level == 1)
                <div class="box-header">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default">
                        <i class="fa fa-plus-circle"></i> Tambah File</button> </a>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                    @endforeach
                </div>
            @endif

            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama</th>
                        <th>File</th>
                        <th>Keterangan</th>
                        <th style="width: 40px">Action</th>
                    </tr>

                    @forelse ($data as $no=>$item)
                        <tr>
                            <th style="width: 5%">{{ ++$no }}</th>
                            <th>{{ $item->nama }}</th>
                            <th>{{ $item->file }}</th>
                            <th>{{ $item->keterangan }}</th>
                            <th style="width: 10%">
                                <div class="btn-group">
                                    <a href="/dokumen/lihat/{{ $item->file }} " target="_blank"
                                        class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom"
                                        title="Lihat File">
                                        <i class="fa fa-eye"></i></a>
                                    @if (Auth::user()->level == '1')
                                        <a href="/dokumen/hapus/{{ Crypt::encrypt($item->id) }}"
                                            class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Hapus">
                                            <i class="fa fa-trash-o"></i></a>
                                    @endif
                                </div>
                            </th>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5" class="text-center">Data Kosong</th>
                        </tr>
                    @endforelse
                </table>
            </div>
            <!-- /.box-body -->
        </div>

        <!--modal -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah File</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/dokumen/upload" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Nama</label>
                                <input type='text' class="form-control" name='nama' />
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" rows="3" placeholder="Keterangan"
                                    name="keterangan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="filepdf">File input</label>
                                <input type="file" id="filepdf" name="file">

                                <p class="help-block">File dalam bentuk PDF/XLS/XLSX dan maksimal file 2Mb</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left"
                                    data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
        <!-- /.modal -->
    </div>
@endsection

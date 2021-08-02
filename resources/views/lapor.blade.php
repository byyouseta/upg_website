@extends('layouts.app2')
@section('head')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection
@section('judul')
    Pelaporan
@endsection
@section('content')
    <!-- START CUSTOM TABS -->

    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">1. Identitas Pelapor</a></li>
                <li><a href="#tab_2" data-toggle="tab">2. Data Penerimaan Gratifikasi</a></li>
                <li><a href="#tab_3" data-toggle="tab">3. Data Pemberi Gratifikasi</a></li>
                <li><a href="#tab_4" data-toggle="tab">4. Alasan dan Kronologi</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="box-body">
                        <div class="col-md-6">
                            <form role="form" action="/lapor/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="nama"
                                        disabled>
                                    @error('nama')
                                        <span class="invalid-feedback text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir"
                                        value="{{ old('tempat_lahir') }}">
                                    @error('tempat_lahir')
                                        <span class="invalid-feedback text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama Instansi</label>
                                    <input type="text" class="form-control" name="instansi" value="{{ old('instansi') }}">
                                    @error('instansi')
                                        <span class="invalid-feedback text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jabatan/Pangkat/Gol</label>
                                    <input type="text" class="form-control" value="{{ old('jabatan') }}" name="jabatan">
                                    @error('jabatan')
                                        <span class="invalid-feedback text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Alamat Kantor</label>
                                    <textarea class="form-control"
                                        name="alamat_kantor">{{ old('alamat_kantor') }}</textarea>
                                    @error('alamat_kantor')
                                        <span class="invalid-feedback text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>No Telepon Kantor</label>
                                    <input type="text" class="form-control" name="telp_kantor"
                                        value="{{ old('telp_kantor') }}">
                                    @error('telp_kantor')
                                        <span class="invalid-feedback text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>No.KTP (NIK)</label>
                                <input type="text" class="form-control" value="{{ old('ktp') }}" name="ktp">
                                @error('ktp')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control" value="{{ old('tgl_lahir') }}" name="tgl_lahir"
                                    id="datepicker">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Unit Kerja</label>
                                <input type="text" class="form-control" value="{{ old('unit') }}" name="unit">
                                @error('unit')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email"
                                    disabled>
                                @error('email')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat Rumah</label>
                                <textarea class="form-control" name="alamat"
                                    disabled>{{ Auth::user()->alamat }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>No Telepon Rumah / HP</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->nohp }}" name="nohp"
                                    disabled>
                                @error('nohp')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <button type="button" id="tab_2" class="btn btn-primary btn-sm pull-right">Selanjutnya</button> --}}
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="box-body">
                        <div class="col-md-6">
                            <!-- select input -->
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
                                <label>Kode Peristiwa</label>
                                <select class="form-control" name="peristiwa">
                                    <option value="">Pilih</option>
                                    @foreach ($data2 as $peristiwa)
                                        <option value="{{ $peristiwa->id }}">
                                            {{ $peristiwa->nama }}</option>
                                    @endforeach
                                </select>
                                @error('peristiwa')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Penerimaan</label>
                                <select class="form-control" name="jenis_penerimaan" id="penerimaan">
                                    <option value="">Pilih Jenis Pelaporan dulu</option>
                                </select>
                                @error('jenis_penerimaan')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Penerimaan</label>
                                <input type="text" class="form-control" name="tempat_terima" required
                                    value="{{ old('tempat_terima') }}">
                                @error('tempat_terima')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Penerimaan</label>
                                <input type="text" class="form-control" value="{{ old('tgl_terima') }}" name="tgl_terima"
                                    id="datepicker2">
                                @error('tgl_terima')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Uraian</label>
                                <textarea class="form-control" name="uraian_peristiwa"
                                    required>{{ old('uraian_peristiwa') }}</textarea>
                                @error('uraian_peristiwa')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga/Nilai Nominal/Taksiran</label>
                                <input type="text" class="form-control" name="nilai" value="{{ old('nilai') }}">
                                @error('nilai')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Lainnya</label>
                                <input type="text" class="form-control" value="{{ old('lainnya') }}" name="lainnya">
                                @error('lainnya')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <div class="box-body">
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" value="{{ old('nama_pemberi') }}"
                                    name="nama_pemberi">
                                @error('nama_pemberi')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control"
                                    name="alamat_pemberi">{{ old('alamat_pemberi') }}</textarea>
                                @error('alamat_pemberi')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Telepon/HP</label>
                                <input type="text" class="form-control" name="nohp_pemberi"
                                    value="{{ old('nohp_pemberi') }}">
                                @error('nohp_pemberi')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pekerjaan/Jabatan</label>
                                <input type="text" class="form-control" value="{{ old('pekerjaan') }}" name="pekerjaan">
                                @error('pekerjaan')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" value="{{ old('email_pemberi') }}"
                                    name="email_pemberi">
                                @error('email_pemberi')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Hubungan dengan Pemberi Gratifikasi</label>
                                <input type="text" class="form-control" value="{{ old('hubungan') }}" name="hubungan">
                                @error('hubungan')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4">
                    <div class="box-body">
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alasan Pemberian</label>
                                <input type="text" class="form-control" value="{{ old('alasan') }}" name="alasan">
                                @error('alasan')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Dokumen yang dilampirkan</label>
                                <select class="form-control" name="dokumen">
                                    <option value="">Pilih Bukti/Dokumen yang dilampirkan</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                    <option value="Ada">Ada</option>
                                </select>
                                @error('dokumen')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload Dokumen / Bukti (Jika Ada) </label>
                                <input type="file" id="exampleInputFile" name="file_bukti">
                                <p class="help-block">File yang dapat diupload adalah file jpg/jpeg dengan max file 2MB</p>

                                @error('bukti')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kronologi Penerimaan</label>
                                <textarea class="form-control" name="kronologi"
                                    rows="3">{{ old('kronologi') }}</textarea>
                                @error('kronologi')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Catatan tambahan (bila perlu)</label>
                                <textarea class="form-control" name="catatan" rows="3">{{ old('catatan') }}</textarea>
                                @error('catatan')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group pull-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->

        <!-- /.col -->
    </div>
@endsection
@section('plugin')
    <script>
        //Date picker
        $('#datepicker').datepicker({
            dateFormat: "yyyy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            orientation: "bottom right"
        })
        //Date picker 2
        $('#datepicker2').datepicker({
            autoclose: true
        })
    </script>
    <script>
        $(function() {
            $('#pelaporan').on('change', function() {
                axios.post('{{ route('getPenerimaan') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#penerimaan').empty();

                        $.each(response.data, function(id, jenis) {
                            $('#penerimaan').append(new Option(jenis, id))
                        })
                    });
            });
        });
        // $(function() {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $('#pelaporan').on('change', function() {
        //         $.ajax({
        //             url: '{{ route('getPenerimaan') }}',
        //             method: 'POST',
        //             data: {
        //                 id: $(this).val()
        //             },
        //             success: function(response) {
        //                 $('#penerimaan').empty();

        //                 $.each(response, function(id, jenis) {
        //                     $('#penerimaan').append(new Option(jenis, id))
        //                 })
        //             }
        //         })
        //     });
        // });
    </script>
@endsection

@extends('layouts.app2')
@section('judul')
    Dashboard
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Selamat Datang</h3>
    
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if (Auth::user()->level==1)
                  <p> Halo <strong>{{ Auth::user()->name }}</strong>, Selamat Datang kembali di UPG Dashboard RSUP Surakarta. <br>
                Mari kita cek lagi laporan-laporan yang masuk, Kamu bisa lihat statistik pelaporan seperti yang ada dibawah ini.</p>
              @else
                  <p>Halo <strong>{{ Auth::user()->name }}</strong>, Selamat Datang kembali di UPG Dashboard RSUP Surakarta. <br>
                    Terima kasih telah berkontribusi terhadap web ini dan tetap pantau Laporan yang telah Anda buat. Salam sehat!</p>
              @endif
               
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
<div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Pelaporan Terselesaikan</span>
          <span class="info-box-number">41,410</span>

          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
              <span class="progress-description">
                70% Increase in 30 Days
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Pelaporan Terpending</span>
          <span class="info-box-number">41,410</span>

          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
              <span class="progress-description">
                70% Increase in 30 Days
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box bg-red">
        <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Pelaporan Belum Diproses</span>
          <span class="info-box-number">41,410</span>

          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
              <span class="progress-description">
                70% Increase in 30 Days
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
 
</section>
@endsection
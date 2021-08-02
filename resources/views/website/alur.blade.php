@extends('weblayouts.app')
@section('pre-content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Alur Pelaporan Gratifikasi di RSUP Surakarta</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Profil</li>
                    <li>Alur</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
@endsection

@section('content')
    <section id="about" class="about">
        <div class="container">
            <div class="row content">
                <div class="col-lg-12">
                    <img src="{{ asset('assets/img/bg1.png') }}" alt="">

                </div>
            </div>
            <div class="row content mt-3">
                <div class="col-lg-4">
                    <h4>Mekanisme Pelaporan</h4>
                    <ul>
                        <li><i class="ri-check-double-line"></i>
                            Setiap Aparatur Kementerian Kesehatan wajib melaporkan Gratifikasi yang diterima kepada KPK.
                        </li>
                        <li><i class="ri-check-double-line"></i>
                            Untuk mempermudah koordinasi, pelaporan Gratifikasi dapat dilakukan melalui Unit Pengendali
                            Gratifikasi (UPG)
                        </li>
                        <li><i class="ri-check-double-line"></i>
                            Aparatur Kementerian Kesehatan pada Unit Pelaksana Teknis (UPT) Kemenkes melaporkan melalui UPG
                            Unit
                            Pelaksana Teknis
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 pt-4 pt-lg-0">
                    <h4>
                        Verifikasi
                    </h4>
                    <p>
                        Laporan Gratifikasi yang telah di sampaikan melalui aplikasi oleh Aparatur Kementerian Kesehatan
                        dilakukan Verifikasi oleh UPG Unit Pelaksana Teknis / UPG Unit Utama dan UPG Kementerian Kesehatan.
                    </p>
                </div>
                <div class="col-lg-4 pt-4 pt-lg-0">
                    <h4>
                        Kirim ke KPK
                    </h4>
                    <p>
                        Laporan Gratifikasi yang telah dilakukan verifikasi oleh UPG Kementerian Kesehatan untuk selanjutnya
                        di
                        kirim ke Komisi Pemberantasan Korupsi (KPK).
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection

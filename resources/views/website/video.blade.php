@extends('weblayouts.app')
@section('pre-content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Video</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Publikasi</li>
                    <li>Video</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
@endsection

@section('content')
    <section id="blog" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-6  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <article class="entry">

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ asset('/assets/img/gratifikasi.mp4') }}"
                                allowfullscreen></iframe>
                        </div>

                        <h2 class="entry-title mt-3">
                            Video Gratifikasi
                        </h2>

                        <div class="entry-content">
                            <p>
                                Melalui video pendek dari KPK RI ini akan diulas apa yang dimaksud dengan gratifikasi,
                                mengapa
                                Indonesia perlu mengatur gratifikasi bagi Penyelenggara Negara atau Pegawai Negeri dan apa
                                dampak
                                gratifikasi kepada negara dan masyarakat? Yuk kita simak!
                            </p>
                        </div>

                    </article><!-- End blog entry -->
                </div>
                <div class="col-lg-6  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <article class="entry">

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="{{ asset('/assets/img/Ayo_tolak_Gratifikasi.mp4') }}" allowfullscreen></iframe>
                        </div>

                        <h2 class="entry-title mt-3">
                            Video Pakta Integritas Pegawai RSUP Surakarta
                        </h2>

                        <div class="entry-content">
                            <p>
                                Video Pakta Integritas untuk menolak GRATIFIKASI di Lingkungan RSUP Surakarta
                            </p>
                        </div>

                    </article><!-- End blog entry -->
                </div>
            </div>
        </div>
    </section>
    {{-- <section id="about" class="about">
        <div class="container">
            <div class="row content">
                {{-- <div class="col-lg-12">
                    


                </div> --}}
    {{-- <div class="col-lg-4">
                    <h4>Video Gratifikasi </h4>
                    <p>
                        Melalui video pendek dari KPK RI ini akan diulas apa yang dimaksud dengan gratifikasi, mengapa
                        Indonesia perlu mengatur gratifikasi bagi Penyelenggara Negara atau Pegawai Negeri dan apa dampak
                        gratifikasi kepada negara dan masyarakat? Yuk kita simak!
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ asset('/assets/img/gratifikasi.mp4') }}"
                            allowfullscreen></iframe>
                    </div>
                </div> --}}
    {{-- <div class="col-lg-12 mt-5 text-right">
                    
                </div> --}}
    {{-- <div class="col-lg-8 mt-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ asset('/assets/img/Ayo_tolak_Gratifikasi.mp4') }}"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 text-right mt-5">
                    <h4>Video Pakta Integritas Pegawai RSUP Surakarta</h4>
                    <p>
                        Video Pakta Integritas untuk menolak GRATIFIKASI di Lingkungan RSUP Surakarta
                    </p>
                </div>
            </div>
        </div>

        </div>
    </section> --}}
@endsection

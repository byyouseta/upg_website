@extends('weblayouts.app')
@section('pre-content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kontak</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Kontak</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
@endsection

@section('content')
    <section id="contact" class="contact">
        <div class="container">
            <h2>UPG RSUP Surakarta</h2>
            <div>
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.187351666682!2d110.78485241396419!3d-7.554539994551774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a143ecda0a3db%3A0xe40d8c658910e250!2sRSUP%20Surakarta!5e0!3m2!1sid!2sid!4v1613644022067!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row">

                <div class="col-lg-4 mt-3">
                    {{-- <br><br> --}}
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Alamat:</h4>
                            <p>Jl. Prof. Dr. R. Soeharso No. 28 Surakarta</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>wbs.rsup@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-phone"></i>
                            <h4>Telp/Fax:</h4>
                            <p>(0271) 713055 / (0271) 713055 Ext.157</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        </div>

        </div>
    </section>
@endsection

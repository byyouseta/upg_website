@extends('weblayouts.app')
@section('pre-content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Formulir</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Publikasi</li>
                    <li>Formulir</li>
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
                    {{-- <h4>
                        Download Formulir
                    </h4> --}}
                    {{-- <ul>
                        <li><i class="ri-check-double-line"></i>
                            Formulir Laporan Gratifikasi disini!
                        </li>
                        <li><i class="ri-check-double-line"></i>
                            Formulir Rekapitulasi penerimaan uang ,kado atau barang, dan karangan bunga disini!
                        </li>
                    </ul>
                    <p>Contoh Laporan Gratifikasi Pernikahan disini!</p>
                    <p>Contoh Laporan Gratifikasi Non Pernikahan disini!</p> --}}
                    <table class="table table-hover" style="width: 100%">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Nama Formulir</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col" class="text-center">Unduh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dokumen)
                                <tr>
                                    {{-- <th scope="row">1</th> --}}
                                    <td>{{ $dokumen->nama }}</td>
                                    <td>{{ $dokumen->keterangan }}</td>
                                    <td class="text-center"><a href="/formulir/unduh/{{ $dokumen->file }}"
                                            target="new_tab">
                                            <i class="icofont-download"></i> </a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

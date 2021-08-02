@extends('weblayouts.app')
@section('pre-content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Pertanyaan yang sering ditanyakan</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Publikasi</li>
                    <li>FAQ</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->
@endsection

@section('content')
    <section id="features" class="features">
        <div class="container">

            <div class="section-title">
                <h2>FAQ</h2>
                <p>Frequently Asked Questions</p>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#tab-1">Apakah yang dimaksud dengan
                                gratifikasi?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2">Mengapa gratifikasi perlu dilaporkan?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3">Siapakah yang dimaksud "pejabat
                                penyelenggara negara" dan "pegawai negeri" dalam konteks gratifikasi ini?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4">Apakah yang menjadi dasar hukum
                                gratifikasi?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-5">Apakah terdapat sanksi jika tidak melaporkan
                                gratifikasi?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-6">Bagaimanakah tata cara pelaporan
                                gratifikasi?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-7">Di manakah saya dapat memperoleh formulir
                                gratifikasi?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-8">Ke manakah saya harus menghubungi jika
                                membutuhkan informasi lain tentang gratifikasi?</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Menurut UU No. 20 tahun 2001,</h3>
                                    <p class="font-italic">penjelasan pasal 12b ayat (1) , </p>
                                    <p>gratifikasi adalah pemberian dalam arti luas, yakni meliputi pemberian uang, barang
                                        rabat (diskon), komisi, pinjaman tanpa bunga, tiket perjalanan, fasilitas
                                        penginapan, perjalanan wisata, pengobatan cuma-cuma, dan fasilitas lainnya.
                                        Gratifikasi tersebut baik diterima di dalam negeri maupun di luar negeri, dan
                                        dilakukan dengan menggunakan sarana elektronik ataupun tanpa sarana elektronik.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/features-1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    {{-- <h3>Et blanditiis nemo veritatis excepturi</h3>
                                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                        sonata raqer a videna mareta paulona marka</p> --}}
                                    <p>Korupsi seringkali berawal dari kebiasaan yang tidak disadari oleh setiap pegawai
                                        negeri dan pejabat penyelenggara negera, misalnya penerimaan hadiah oleh pejabat
                                        penyelenggara/pegawai negeri dan keluarganya dalam suatu acara pribadi, atau
                                        menerima pemberian suatu fasilitas tertentu yang tidak wajar. Hal semacam ini
                                        semakin lama akan menjadi kebiasaan yang cepat atau lambat akan memengaruhi
                                        pengambilan keputusan oleh pegawai negeri atau pejabat penyelenggara negara yang
                                        bersangkutan. Banyak orang berpendapat bahwa pemberian tersebut sekadar tanda terima
                                        kasih dan sah-sah saja. Namun, perlu disadari bahwa pemberian tersebut selalu
                                        terkait dengan jabatan yang dipangku oleh penerima serta kemungkinan adanya
                                        kepentingan-kepentingan dari pemberi, dan pada saatnya pejabat penerima akan berbuat
                                        sesuatu untuk kepentingan pemberi sebagai balas jasa.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/features-2.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Berdasarkan UU No. 28 tahun 1999,</h3>
                                    <p class="font-italic">bab II pasal 2,</p>
                                    <p>Penyelenggara negera meliputi pejabat negera pada lembaga
                                        tertinggi negara; pejabat negara pada lembaga tinggi negara; menteri; gubernur;
                                        hakim; pejabat negara lainnya seperti duta besar, wakil gubernur, bupati; wali kota
                                        dan wakilnya; pejabat lainnya yang memiliki fungsi strategis seperti: komisaris,
                                        direksi, dan pejabat struktural pada BUMN dan BUMD; pimpinan Bank Indonesia;
                                        pimpinan perguruan tinggi; pejabat eselon I dan pejabat lainnya yang disamakan pada
                                        lingkungan sipil dan militer; jaksa; penyidik; panitera pengadilan; dan pimpinan
                                        proyek atau bendaharawan proyek.
                                    </p>
                                    <p>Sementara yang dimaksud dengan pegawai negeri, sesuai dengan UU No 31. tahun 1999
                                        sebagaimana telah diubah dengan No. 20 Tahun 2001, meliputi: pegawai pada MA dan MK;
                                        pegawai pada kementerian/departemen & LPDN; pegawai pada Kejagung; pegawai pada Bank
                                        Indonesia; pimpinan dan pegawai pada sekretariat MPR, DPR, DPD, DPRD Provinsi/Dati
                                        II; pegawai pada perguruan tinggi; pegawai pada komisi atau badan yang dibentuk
                                        berdasarkan UU, Kepres, maupun PP; pimpinan dan pegawai pada sekretariat presiden,
                                        sekretariat wakil presiden, dan seskab dan sekmil; pegawai pada BUMN dan BUMD;
                                        pegawai pada lembaga peradilan; anggota TNI dan Polri serta pegawai sipil di
                                        lingkungan TNI dan Polri; serta pimpinan dan pegawai di lingkungan pemerintah daerah
                                        daerah tingkat I dan II.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/features-3.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Berdasarkan UU No. 20 tahun 2001 pasal 12b ayat (1),</h3>
                                    {{-- <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure
                                        porro quis delectus</p> --}}
                                    <p>setiap gratifikasi kepada pegawai negeri atau penyelenggara negara dianggap suap
                                        apabila berhubungan dengan jabatannya dan yang berlawanan dengan kewajiban atau
                                        tugasnya, dengan ketentuan sebagai berikut: Yang nilainya Rp10 juta atau lebih,
                                        pembuktian bahwa gratifikasi tersebut bukan merupakan suap dilakukan oleh penerima
                                        gratifikasi (pembuktian terbalik) Yang nilainya kurang dari Rp10 juta, pembuktian
                                        bahwa gratifikasi tersebut bukan suap dilakukan oleh penuntut umum. Ditambahkan
                                        dalam pasal 12b ayat (2), ketentuan sebagaimana dimaksud dalam pasal 12b ayat (1)
                                        tidak berlaku jika penerima melaporkan gratifikasi yang diterimanya kepada KPK,
                                        paling lambat 30 (tiga puluh) hari kerja sejak tanggal gratifikasi tersebut
                                        diterimanya.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/features-4.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    {{-- <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p> --}}
                                    <p>Ya, pidana bagi pegawai negeri atau penyelenggara negara sebagaimana dimaksud dalam
                                        pasal 12b ayat (1) adalah: Pidana penjara seumur hidup dan pidana penjara paling
                                        singkat 4 (empat) tahun dan paling lama 20 (dua puluh) tahun, dan pidana denda
                                        paling sedikit Rp200.000.000 (dua ratus juta rupiah) dan paling banyak
                                        Rp1.000.000.000 (satu miliar rupiah).</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/features-5.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-6">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Berdasarkan UU No. 31 tahun 1999 jo. UU No. 20 tahun 2001</h3>
                                    <p class="font-italic">pasal 12c ayat (2) dan UU No. 30 tahun 2002 pasal 16,</p>
                                    <p>setiap pegawai negeri atau penyelenggara negara yang menerima gratifikasi wajib
                                        melaporkan kepad KPK, dengan tata cara sebagai berikut: Penerima gratifikasi wajib
                                        melaporkan penerimaannya selambat-lambatnya 30 (tiga uluh) hari kerja kepada KPK,
                                        terhitung sejak tanggal gratifikasi tersebut diterima. Laporan disampaikan secara
                                        tertulis dengan mengisi formulir sebagaimana ditetapkan oleh KPK dengan melampirkan
                                        dokumen yang berkaitan dengan gratifikasi Formulir yang dimaksud sekurang-kurangnya
                                        memuat nama dan alamat lengkap penerima dan pemberi gratifikasi; jabatan pegawai
                                        negeri atau penyelenggara negara; tempat dan waktu penerima gratifikasi; uraian
                                        jenis gratifikasi yang diterima; dan nilai gratifikasi yang diterima.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/features-5.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-7">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    {{-- <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p> --}}
                                    <p>Formulir pelaporan gratifikasi dapat diperoleh di kantor UPG RSUP Surakarta, atau
                                        dapat pula diunduh (download) di halaman UPG Website WBS di
                                        www.upg.rsupsurakarta.co.id
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/features-5.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-8">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    {{-- <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p> --}}
                                    <p>Anda dapat menghubungi UPG RSUP Surakarta. Jl. Prof.Dr.R.Soeharso No.28 Surakarta
                                        Telp: (0271) 713055 Faks: (0271) 713055 / 720002.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/features-5.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('adminlte/dist/img/avatar04.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li @if (session('halaman') == 'home') class="active" @endif>
                <a href="/home">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @if (Auth::user()->level == 1)
                <li class=" @if (session('halaman')=='pelaporan' ) active @endif">
                    <a href="/laporan">
                        <i class="fa fa-gears"></i>
                        <span>Pengaturan Pelaporan</span>
                        {{-- <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span> --}}
                    </a>
                    {{-- <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-hourglass-start"></i> Pelaporan Belum Diproses</a></li>
                        <li><a href="#"><i class="fa fa-hourglass-half"></i> Pending Pelaporan Gratifikasi</a></li>
                        <li><a href="#"><i class="fa fa-hourglass-end"></i> Pelaporan Gratifikasi Selesai</a></li>
                    </ul> --}}
                </li>
                <li @if (session('halaman') == 'users') class="active" @endif>
                    <a href="/pengguna">
                        <i class="fa fa-users"></i> <span>Pengaturan User</span>
                    </a>
                </li>
                <li class="treeview @if (session('halaman')=='master' ) active @endif">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Master Data Pelaporan</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/pelaporan"><i class="fa fa-plus"></i> Tambah Jenis Laporan</a></li>
                        <li><a href="/penerimaan"><i class="fa fa-plus"></i> Tambah Jenis Penerimaan</a></li>
                        <li><a href="/peristiwa"><i class="fa fa-plus"></i> Tambah Kode Peristiwa</a></li>
                    </ul>
                </li>
                <li @if (session('halaman') == 'history') class="active" @endif>
                    <a href="#">
                        <i class="fa fa-history"></i> <span>History Login Pengguna</span>

                    </a>
                </li>
            @else
                <li class="treeview @if (session('halaman')=='pengaturan_pengguna' ) active @endif">
                    <a href="#">
                        <i class="fa fa-gears"></i>
                        <span>Pengaturan Pengguna</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/profil"><i class="fa fa-user"></i> Profil</a></li>
                        <li><a href="/password"><i class="fa fa-key"></i> Ubah Password</a></li>
                    </ul>
                </li>
                <li @if (session('halaman') == 'lapor') class="active" @endif>
                    <a href="/lapor">
                        <i class="fa fa-book"></i> <span>Buat Pelaporan Gratifikasi</span>
                    </a>
                </li>
                <li @if (session('halaman') == 'history_laporan') class="active" @endif>
                    <a href="/history/pelaporan">
                        <i class="fa fa-history"></i> <span>History Pelaporan</span>

                    </a>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

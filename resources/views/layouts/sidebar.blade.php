
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU UTAMA</li>
    
    @if (Auth::user()->hasRole('superadmin'))
        
    <li class="{{ (request()->is('superadmin')) ? 'active' : '' }}"><a href="/superadmin"><i class="fa fa-home"></i> <span><i>Beranda</i></span></a></li>
    
    <li class="header">DATA MASTER</li>
    
    
    <li class="{{ (request()->is('superadmin/user*')) ? 'active' : '' }}"><a href="/superadmin/user"><i class="fa fa-arrow-right"></i> <span><i>Data Admin</i></span></a></li>
    <li class="{{ (request()->is('superadmin/pegawai*')) ? 'active' : '' }}"><a href="/superadmin/pegawai"><i class="fa fa-arrow-right"></i> <span><i>Data Pegawai</i></span></a></li>
    <li class="{{ (request()->is('superadmin/nasabah*')) ? 'active' : '' }}"><a href="/superadmin/nasabah"><i class="fa fa-arrow-right"></i> <span><i>Data Nasabah</i></span></a></li>

    <li class="header">TRANSAKSI</li>
    <li class="{{ (request()->is('superadmin/beranda*')) ? 'active' : '' }}"><a href="/superadmin/deposito"><i class="fa fa-arrow-right"></i> <span><i>Deposito</i></span></a></li>
    <li class="{{ (request()->is('superadmin/beranda*')) ? 'active' : '' }}"><a href="/superadmin/setoran"><i class="fa fa-arrow-right"></i> <span><i>Setoran</i></span></a></li>
    <li class="{{ (request()->is('superadmin/beranda*')) ? 'active' : '' }}"><a href="/superadmin/sertifikat"><i class="fa fa-arrow-right"></i> <span><i>Sertifikat</i></span></a></li>
    <li class="{{ (request()->is('superadmin/beranda*')) ? 'active' : '' }}"><a href="/superadmin/pencairan"><i class="fa fa-arrow-right"></i> <span><i>Pencairan</i></span></a></li>
    
    <li class="header">LAPORAN</li>
    <li class="{{ (request()->is('superadmin/laporan*')) ? 'active' : '' }}"><a href="/superadmin/laporan"><i class="fa fa-key"></i> <span><i>Laporan </i></span></a></li>
    

    <li class="header">SETTING</li>
    <li class="{{ (request()->is('superadmin/gp*')) ? 'active' : '' }}"><a href="/superadmin/gp"><i class="fa fa-key"></i> <span><i>Ganti Pass</i></span></a></li>
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span><i>Logout</i></span></a></li>
    @else
        
    <li class="{{ (request()->is('pemohon')) ? 'active' : '' }}"><a href="/pemohon"><i class="fa fa-home"></i> <span><i>Dashboard</i></span></a></li>
    <li class="{{ (request()->is('pemohon/pengajuan*')) ? 'active' : '' }}"><a href="/pemohon/pengajuan"><i class="fa fa-check"></i> <span><i>Pengajuan Bibit</i></span></a></li>
    <li class="{{ (request()->is('pemohon/serahterima*')) ? 'active' : '' }}"><a href="/pemohon/serahterima"><i class="fa fa-check"></i> <span><i>Serah Terima Bibit</i></span></a></li>
    <li class="{{ (request()->is('pemohon/gp*')) ? 'active' : '' }}"><a href="/pemohon/gp"><i class="fa fa-key"></i> <span><i>Ganti Pass</i></span></a></li>
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span><i>Logout</i></span></a></li>
    {{-- <li class="{{ (request()->is('pemohon/daftar-layanan*')) ? 'active' : '' }}"><a href="/pemohon/daftar-layanan"><i class="fa fa-list"></i> <span>Daftar Layanan</span></a></li> --}}
    @endif
    </ul>
    <!-- /.sidebar-menu -->
</section>
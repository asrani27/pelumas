
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU UTAMA</li>
        
    <li class="{{ (request()->is('superadmin')) ? 'active' : '' }}"><a href="/superadmin"><i class="fa fa-home"></i> <span><i>Beranda</i></span></a></li>
    
    <li class="header">DATA MASTER</li>
    
    
    <li class="{{ (request()->is('superadmin/jabatan*')) ? 'active' : '' }}"><a href="/superadmin/jabatan"><i class="fa fa-arrow-right"></i> <span><i>Jabatan</i></span></a></li>
    <li class="{{ (request()->is('superadmin/karyawan*')) ? 'active' : '' }}"><a href="/superadmin/karyawan"><i class="fa fa-arrow-right"></i> <span><i>Karyawan</i></span></a></li>
    <li class="{{ (request()->is('superadmin/jenisoli*')) ? 'active' : '' }}"><a href="/superadmin/jenisoli"><i class="fa fa-arrow-right"></i> <span><i>Jenis Oli</i></span></a></li>
    <li class="{{ (request()->is('superadmin/merkoli*')) ? 'active' : '' }}"><a href="/superadmin/merkoli"><i class="fa fa-arrow-right"></i> <span><i>Merk Oli</i></span></a></li>
    <li class="{{ (request()->is('superadmin/sparepart*')) ? 'active' : '' }}"><a href="/superadmin/sparepart"><i class="fa fa-arrow-right"></i> <span><i>Sparepart</i></span></a></li>
    <li class="{{ (request()->is('superadmin/jenislayanan*')) ? 'active' : '' }}"><a href="/superadmin/jenislayanan"><i class="fa fa-arrow-right"></i> <span><i>Jenis Layanan</i></span></a></li>
    <li class="{{ (request()->is('superadmin/penjualan*')) ? 'active' : '' }}"><a href="/superadmin/penjualan"><i class="fa fa-arrow-right"></i> <span><i>Transaksi Penjualan</i></span></a></li>
    <li class="{{ (request()->is('superadmin/perhitungan*')) ? 'active' : '' }}"><a href="/superadmin/perhitungan"><i class="fa fa-arrow-right"></i> <span><i>Perhitungan</i></span></a></li>
    <li class="{{ (request()->is('superadmin/laporan*')) ? 'active' : '' }}"><a href="/superadmin/laporan"><i class="fa fa-arrow-right"></i> <span><i>Laporan</i></span></a></li>
    <li class="header">SETTING</li>
    
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span><i>Logout</i></span></a></li>
   
    
    </ul>
    <!-- /.sidebar-menu -->
</section>
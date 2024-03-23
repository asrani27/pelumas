@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Laporan</h3>

            <div class="box-tools">
              
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <a href="/superadmin/laporan/karyawan" target="_blank" class="btn btn-sm btn-warning">LAP. KARYAWAN</a>
            <a href="/superadmin/laporan/jenisoli" target="_blank" class="btn btn-sm btn-warning">LAP. JENIS OLI</a>
            <a href="/superadmin/laporan/merkoli" target="_blank" class="btn btn-sm btn-warning">LAP. MERK OLI</a>
            <a href="/superadmin/laporan/jenislayanan" target="_blank" class="btn btn-sm btn-warning">LAP. JENIS LAYANAN</a>
            <a href="/superadmin/laporan/jabatan" target="_blank" class="btn btn-sm btn-warning">LAP. JABATAN</a>
          </div>
          <!-- /.box-body -->
        </div>
        
        <!-- /.box -->
      </div>
</div>

<div class="row">
  <div class="col-md-12">
      <div class="box box-warning">
        <div class="box-header">
          <i class="ion ion-clipboard"></i><h3 class="box-title">Data Laporan Per Periode</h3>

          <div class="box-tools">
            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <form method="post" action="/superadmin/laporan/periode" target="_blank">
            @csrf
          Mulai
          <input type="date" name="mulai">
          Sampai
          <input type="date" name="sampai">
          Laporan
          <select name="jenis" required>
            <option value="">-pilih-</option>
            <option value="penjualan">transaksi service & penjualan</option>
            
          </select>
          &nbsp;
          &nbsp;
          &nbsp;
          <button type="submit" class="btn btn-xs btn-warning">Print</button>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      
      <!-- /.box -->
    </div>
</div>
@endsection
@push('js')

@endpush

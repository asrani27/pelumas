@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Laporan</h3>

            <div class="box-tools">
              
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <a href="/superadmin/laporan/pegawai" target="_blank" class="btn btn-sm btn-primary">LAP. PEGAWAI</a>
            <a href="/superadmin/laporan/nasabah" target="_blank" class="btn btn-sm btn-primary">LAP. NASABAH</a>
          </div>
          <!-- /.box-body -->
        </div>
        
        <!-- /.box -->
      </div>
</div>

<div class="row">
  <div class="col-md-12">
      <div class="box box-success">
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
            <option value="deposito">Deposito</option>
            <option value="setoran">Transaksi Setoran</option>
            <option value="sertifikat">Sertifikat</option>
            <option value="pencairan">Pencairan</option>
          </select>
          &nbsp;
          &nbsp;
          &nbsp;
          <button type="submit" class="btn btn-xs btn-primary">Print</button>
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

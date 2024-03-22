@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Tambah Deposito</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/superadmin/deposito/create" method="post">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" name="tanggal" class="form-control" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nomor Deposito</label>
                  <div class="col-sm-10">
                    <input type="text" name="nomor" class="form-control" readonly value="BPR/OD/XX-{{$nomor}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nasabah</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="nasabah_id" required>
                      <option value="">-pilih-</option>
                      @foreach ($nasabah as $item)   
                      <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Deposito</label>
                  <div class="col-sm-10">
                    <input type="text" name="jenis" class="form-control" value="Deposito Berjangka" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Deposito</label>
                  <div class="col-sm-10">
                    <input type="text" name="jumlah_deposito" class="form-control" onkeypress="return hanyaAngka(event)"/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jangka Waktu</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jangka_waktu">
                      <option value="1">1 Bulan</option>
                      <option value="3">3 Bulan</option>
                      <option value="6">6 Bulan</option>
                      <option value="9">9 Bulan</option>
                      <option value="12">12 Bulan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Bunga</label>
                  <div class="col-sm-10">
                    <input type="text" name="bunga" class="form-control" onkeypress="return hanyaAngka(event)"/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jatuh Tempo</label>
                  <div class="col-sm-10">
                    <input type="date" name="jatuh_tempo" class="form-control">
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Simpan</button>
                    <a href="/superadmin/deposito" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
    </div>
   </div>
    
</section>


@endsection
@push('js')
<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
  
      return false;
    return true;
  }
  </script>
@endpush


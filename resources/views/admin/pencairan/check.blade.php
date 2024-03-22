@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Pencairan Deposito</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/superadmin/pencairan/check" method="post">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" name="tanggal" class="form-control" value={{\Carbon\Carbon::now()->format('Y-m-d')}}>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nomor Deposito</label>
                  <div class="col-sm-10">
                    <input type="text" name="nomor" class="form-control" readonly value="{{$deposito->nomor}}">
                    <input type="hidden" name="deposito_id" class="form-control" readonly value="{{$deposito->id}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nasabah</label>
                  <div class="col-sm-10">
                    <input type="text" name="nasabah" class="form-control" readonly value="{{$deposito->nasabah->nama}}">
                    <input type="hidden" name="nasabah_id" class="form-control" readonly value="{{$deposito->nasabah->id}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type="text" name="jumlah_deposito" class="form-control" readonly value="{{number_format($deposito->jumlah_deposito)}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jangka Waktu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly value="{{$deposito->jangka_waktu}} Bulan">
                    <input type="hidden" name="jangka_waktu" class="form-control" readonly value="{{$deposito->jangka_waktu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">bunga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly value="{{$deposito->bunga}} %">
                    <input type="hidden" name="bunga" class="form-control" readonly value="{{$deposito->bunga}}">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Profit Bunga</label>
                  <div class="col-sm-10">
                    <input type="text" name="profit_bunga" class="form-control" readonly value="{{number_format($deposito->profit_bunga)}} ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pajak</label>
                  <div class="col-sm-10">
                    <input type="text" name="pajak" class="form-control" readonly value="{{number_format($deposito->pajak_bunga)}} ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Total Pendapatan</label>
                  <div class="col-sm-10">
                    <input type="text" name="total_pendapatan" class="form-control" readonly value="{{number_format($deposito->total_pendapatan)}} ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Total Pencairan</label>
                  <div class="col-sm-10">
                    <input type="text" name="pencairan" class="form-control" readonly value="{{number_format($deposito->pencairan)}} ">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> </label>
                  <div class="col-sm-10">
                    Pencairan Ke :
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> No rek</label>
                  <div class="col-sm-10">
                    <input type="text" name="norek" class="form-control" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Nama Penerima</label>
                  <div class="col-sm-10">
                    <input type="text" name="penerima" class="form-control" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-money"></i> Cairkan Rp., {{number_format($deposito->pencairan)}}</button>
                    <a href="/superadmin/pencairan" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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


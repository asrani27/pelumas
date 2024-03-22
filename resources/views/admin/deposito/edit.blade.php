@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit deposito</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/deposito/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" value="{{$data->tanggal}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Deposito</label>
                    <div class="col-sm-10">
                      <input type="text" name="nomor" class="form-control" readonly value="{{$data->nomor}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nasabah</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="nasabah_id" required>
                        <option value="">-pilih-</option>
                        @foreach ($nasabah as $item)   
                        <option value="{{$item->id}}" {{$data->nasabah_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
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
                      <input type="text" name="jumlah_deposito" class="form-control" value="{{$data->jumlah_deposito}}" onkeypress="return hanyaAngka(event)"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jangka Waktu</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="jangka_waktu">
                        <option value="1" {{$data->jangka_waktu == '1' ? 'selected':''}}>1 Bulan</option>
                        <option value="3" {{$data->jangka_waktu == '3' ? 'selected':''}}>3 Bulan</option>
                        <option value="6" {{$data->jangka_waktu == '6' ? 'selected':''}}>6 Bulan</option>
                        <option value="9" {{$data->jangka_waktu == '9' ? 'selected':''}}>9 Bulan</option>
                        <option value="12" {{$data->jangka_waktu == '12' ? 'selected':''}}>12 Bulan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Bunga</label>
                    <div class="col-sm-10">
                      <input type="text" name="bunga" class="form-control" value="{{$data->bunga}}" onkeypress="return hanyaAngka(event)"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jatuh Tempo</label>
                    <div class="col-sm-10">
                      <input type="date" name="jatuh_tempo" class="form-control" value="{{$data->jatuh_tempo}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Update</button>
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

@endpush


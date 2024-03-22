@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit sertifikat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/sertifikat/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" readonly value="{{$data->tanggal}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Deposito</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="deposito_id" required>
                        <option value="">pilih</option>
                      @foreach ($deposito as $item)
                          <option value="{{$item->id}}" {{$data->deposito_id == $item->id ? 'selected':''}}>{{$item->nomor}}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nasabah</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="nasabah_id" required>
                        <option value="">pilih</option>
                      @foreach ($nasabah as $item)
                          <option value="{{$item->id}}" {{$data->nasabah_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/sertifikat" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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


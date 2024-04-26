@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit booking</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/booking/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Booking</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" value="{{$data->tanggal}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama pelanggan</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control"  value="{{$data->nama}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Telp pelanggan</label>
                    <div class="col-sm-10">
                      <input type="text" name="telp" class="form-control"  value="{{$data->telp}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nopol kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" name="nopol" class="form-control"  value="{{$data->nopol}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">merk kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" name="merk" class="form-control" value="{{$data->merk}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Layanan</label>
                    <div class="col-sm-10">
                      <ul>
                      @foreach ($layanan as $item)
                      
                        <li><input type="checkbox" name="layanan[]" value="{{$item->nama}}" {{str_contains($data->layanan, $item->nama) ? 'checked':''}}>
                          {{$item->nama}}</li>  
                      @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="status">
                        <option value="">Menunggu</option>
                        <option value="1">Di service</option>
                        <option value="2">Selesai</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/booking" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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


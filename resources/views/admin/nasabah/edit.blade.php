@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit nasabah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/nasabah/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">No rek</label>
                    <div class="col-sm-10">
                      <input type="text" name="norek" class="form-control" value="{{$data->norek}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jkel</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="jkel">
                        <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>Pria</option>
                        <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>Wanita</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl_lahir" class="form-control" value="{{$data->tgl_lahir}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Telp</label>
                    <div class="col-sm-10">
                      <input type="text" name="telp" class="form-control" value="{{$data->telp}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                      <input type="text" name="pekerjaan" class="form-control" value="{{$data->pekerjaan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Ahli WAris</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_ahliwaris" class="form-control" value="{{$data->nama_ahliwaris}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat Ahli Waris</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat_ahliwaris" class="form-control" value="{{$data->alamat_ahliwaris}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Telp Ahli WAris</label>
                    <div class="col-sm-10">
                      <input type="text" name="telp_ahliwaris" class="form-control" value="{{$data->telp_ahliwaris}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Pegawai</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="pegawai_id">
                        @foreach ($pegawai as $item)   
                        <option value="{{$item->id}}"  {{$data->pegawai_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/nasabah" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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


@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Tambah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/superadmin/perhitungan/datalatih/create" method="post">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Merk Oli</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Januari</label>
                  <div class="col-sm-10">
                    <input type="text" name="januari" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Februari</label>
                  <div class="col-sm-10">
                    <input type="text" name="februari" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Maret</label>
                  <div class="col-sm-10">
                    <input type="text" name="maret" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Class</label>
                  <div class="col-sm-10">
                    <select name="class" class="form-control" required>
                      <option value="">-pilih-</option>
                      <option value="terlaris">Terlaris</option>
                      <option value="tidak terlaris">Tidak Terlaris</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Simpan</button>
                    <a href="/superadmin/perhitungan" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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


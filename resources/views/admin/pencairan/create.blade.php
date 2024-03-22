@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Pencairan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/superadmin/pencairan/check" method="get">
                @csrf
              <div class="box-body">
                <div class="form-group">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nomor Deposito yang dicairkan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="deposito_id" required>
                      <option value="">pilih</option>
                      @foreach ($deposito as $item)
                          <option value="{{$item->id}}">{{$item->nomor}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Check</button>
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


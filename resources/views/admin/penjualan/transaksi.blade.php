@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-6">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Detail Pembeli </h3>
            </div>
                
            <form class="form-horizontal">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" value="{{$data->nama}}" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Telp</label>
                    <div class="col-sm-10">
                      <input type="text" name="telp" class="form-control" value="{{$data->telp}}" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Mobil</label>
                    <div class="col-sm-10">
                      <input type="text" name="jenis_mobil" class="form-control" value="{{$data->jenis_mobil}}" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nopol</label>
                    <div class="col-sm-10">
                      <input type="text" name="nopol" class="form-control" value="{{$data->nopol}}" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Karyawan</label>
                    <div class="col-sm-10">
                      <input type="text" name="nopol" class="form-control" value="{{$data->karyawan->nama}}" readonly>
                    </div>
                  </div>
                  
              </div>
            </form>
              
        </div>
    </div>
    <div class="col-md-6">

        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Transaksi Penjualan & service </h3>
            </div>
                
                @csrf
                <div class="box-body">
                    <form class="form-horizontal" method="post" action="/superadmin/penjualan/transaksi/{{$data->id}}">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Layanan</label>
                            <div class="col-sm-7">
                                <select name="nama" class="form-control" required>
                                    <option value="">-pilih-</option>
                                    @foreach ($layanan as $item)
                                        <option value="{{$item->id}}">{{$item->nama}} - Rp. {{number_format($item->harga)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2">
                            <input type="hidden" name="morp" class="form-control" value="jenis_layanan">
                            <input type="text" name="jumlah" class="form-control" value="1" onkeypress="return hanyaAngka(event)">
                            </div>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-success">+</button>
                            </div>
                        </div>
                    </form>

                    <form class="form-horizontal" method="post" action="/superadmin/penjualan/transaksi/{{$data->id}}">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Oli</label>
                            <div class="col-sm-7">
                                <select name="nama" class="form-control" required>
                                    <option value="">-pilih-</option>
                                    @foreach ($oli as $item)
                                        <option value="{{$item->id}}">{{$item->nama}} - Rp. {{number_format($item->harga)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2">
                            <input type="hidden" name="morp" class="form-control" value="merk_oli">
                            <input type="text" name="jumlah" class="form-control" value="1" onkeypress="return hanyaAngka(event)">
                            </div>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-success">+</button>
                            </div>
                        </div>
                    </form>

                    <form class="form-horizontal" method="post" action="/superadmin/penjualan/transaksi/{{$data->id}}">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sparepart</label>
                            <div class="col-sm-7">
                                <select name="nama" class="form-control" required>
                                    <option value="">-pilih-</option>
                                    @foreach ($sparepart as $item)
                                        <option value="{{$item->id}}">{{$item->nama}} - Rp. {{number_format($item->harga)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2">
                            <input type="hidden" name="morp" class="form-control" value="sparepart">
                            <input type="text" name="jumlah" class="form-control" value="1" onkeypress="return hanyaAngka(event)">
                            </div>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-success">+</button>
                            </div>
                        </div>
                    </form>
                  
              </div>
              
        </div>
    </div>
   </div>

   <div class="row">

    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Detail Penjualan & Service </h3>
            </div>
                
            <form class="form-horizontal">
                @csrf
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </table>
                  
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


@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data deposito</h3>
    
              <div class="box-tools">
                <a href="/superadmin/deposito/create" class="btn btn-sm btn-primary "><i class="fa fa-plus-circle"></i> Tambah deposito</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Tanggal</th>
                  <th>Nomor Deposito</th>
                  <th>Nasabah/norek</th>
                  <th>Jenis Deposito</th>
                  <th>Jumlah </th>
                  <th>Jangka Waktu</th>
                  <th>bunga</th>
                  <th>jatuh tempo</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y')}}</td>
                    <td>{{$item->nomor}}</td>
                    <td>{{$item->nasabah == null ? '': $item->nasabah->nama}}<br/>
                        {{$item->nasabah == null ? '': $item->nasabah->norek}}
                    </td>
                    <td>{{$item->jenis}}</td>
                    <td>{{number_format($item->jumlah_deposito)}}</td>
                    <td>{{$item->jangka_waktu}} Bulan</td>
                    <td>{{$item->bunga}} %</td>
                    <td>{{\Carbon\Carbon::parse($item->jatuh_tempo)->translatedFormat('d F Y')}}</td>
                    <td>
                        <a href="/superadmin/deposito/edit/{{$item->id}}" class="btn btn-xs btn-flat  btn-success"><i class="fa fa-edit"></i></a>
                        <a href="/superadmin/deposito/delete/{{$item->id}}"
                            onclick="return confirm('Yakin ingin di hapus');"
                            class="btn btn-xs btn-flat  btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          {{$data->links()}}
        </div>
    </div>
</section>


@endsection
@push('js')

@endpush


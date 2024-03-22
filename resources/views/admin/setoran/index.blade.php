@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data setoran</h3>
    
              <div class="box-tools">
                <a href="/superadmin/setoran/create" class="btn btn-sm btn-primary "><i class="fa fa-plus-circle"></i> Tambah setoran</a>
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
                  <th>Jumlah Setoran</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i:s')}}</td>
                    <td>{{$item->deposito == null ? '': $item->deposito->nomor}}</td>
                    <td>{{$item->nasabah == null ? '': $item->nasabah->nama}}<br/>
                        {{$item->nasabah == null ? '': $item->nasabah->norek}}
                    </td>
                    <td>{{number_format($item->nominal)}}</td>
                    <td>
                        <a href="/superadmin/setoran/edit/{{$item->id}}" class="btn btn-xs btn-flat  btn-success"><i class="fa fa-edit"></i></a>
                        <a href="/superadmin/setoran/delete/{{$item->id}}"
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


@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data Pegawai</h3>
    
              <div class="box-tools">
                <a href="/superadmin/pegawai/create" class="btn btn-sm btn-primary "><i class="fa fa-plus-circle"></i> Tambah Pegawai</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Nama</th>
                  <th>Jkel</th>
                  <th>Alamat</th>
                  <th>Tgl lahir</th>
                  <th>Telp</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jkel}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->tgl_lahir}}</td>
                    <td>{{$item->telp}}</td>
                    <td>{{$item->jabatan}}</td>
                    <td>
                        <a href="/superadmin/pegawai/edit/{{$item->id}}" class="btn btn-xs btn-flat  btn-success"><i class="fa fa-edit"></i></a>
                        <a href="/superadmin/pegawai/delete/{{$item->id}}"
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


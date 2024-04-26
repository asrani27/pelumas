@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data Booking</h3>
    
              <div class="box-tools">
                <a href="/superadmin/booking/create" class="btn btn-sm btn-danger "><i class="fa fa-plus-circle"></i> Tambah booking</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Tanggal</th>
                  <th>Nomor Antrian</th>
                  <th>Nama</th>
                  <th>Telp</th>
                  <th>NoPol</th>
                  <th>Merk</th>
                  <th>Layanan Yang Di inginkan</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                    <td>{{$item->antrian}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->telp}}</td>
                    <td>{{$item->nopol}}</td>
                    <td>{{$item->merk}}</td>
                    <td>
                      @foreach (json_decode($item->layanan) as $item2)
                          <li>{{$item2}}</li>
                      @endforeach
                    </td>
                    <td>
                    @if ($item->status == null)
                        menunggu
                    @elseif ($item->status == 1)
                        di service
                    @else
                        selesai
                    @endif
                    </td>
                    <td>
                        <a href="/superadmin/booking/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/superadmin/booking/delete/{{$item->id}}"
                            onclick="return confirm('Yakin ingin di hapus');"
                            class="btn btn-xs  btn-danger"><i class="fa fa-trash"></i> Delete</a>
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


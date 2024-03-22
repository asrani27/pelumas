@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data pencairan</h3>
    
              <div class="box-tools">
                <a href="/superadmin/pencairan/create" class="btn btn-sm btn-primary "><i class="fa fa-plus-circle"></i> Tambah pencairan</a>
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
                  <th>Nasabah</th>
                  <th>Jumlah Deposito</th>
                  <th>Jangka Waktu</th>
                  <th>Bunga</th>
                  <th>Penghasilan</th>
                  <th>Pot. Pajak</th>
                  <th>Total Pendapatan</th>
                  <th>Total Pencairan</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i:s')}}</td>
                    <td>{{$item->deposito->nomor}}</td>
                    <td>{{$item->nasabah == null ? '': $item->nasabah->nama}}</td>
                    <td>{{number_format($item->jumlah_deposito)}}</td>
                    <td>{{$item->jangka_waktu}} Bulan</td>
                    <td>{{$item->bunga}} %</td>
                    <td>{{number_format($item->profit_bunga)}}</td>
                    <td>{{number_format($item->pajak)}}</td>
                    <td>{{number_format($item->total_pendapatan)}}</td>
                    <td>{{number_format($item->pencairan)}}</td>
                    <td>
                        <a href="/superadmin/pencairan/delete/{{$item->id}}"
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



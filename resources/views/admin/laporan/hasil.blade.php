<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table border=0 width="100%">
        <tr>
            <td width="15%" style="text-align: right">
                <img src="/logo.jpg" width="50%">
            </td>
            <td style="text-align: center">
                <b>BENGKEL FAUZAN MOTOR<br/></b>
                Alamat: Jl. Ir. P.H.M. Noor, Mabuun RT 07 Rw 03, Kec. Murung Pudak, Kab. Tabalong, Kalimantan Selatan.
                

            </td>
            <td width="15%" style="text-align: right">
                
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN HASIL PERHITUNGAN</u></strong></td>
        </tr>
    </table>
    <br/>
    
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table border=1 cellspacing="0" cellpadding="3" width="100%">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Nama</th>
                  <th>Jan</th>
                  <th>Feb</th>
                  <th>Maret</th>
                  <th>Class</th>
                  <th> Euclidean Distance</th>
                  <th> Ranking</th>
                </tr>
                
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{1 + $key}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->januari}}</td>
                    <td>{{$item->februari}}</td>
                    <td>{{$item->maret}}</td>
                    <td>{{$item->class}}</td>
                    <td>{{$item->ed}}</td>
                    <td>{{$item->rank}}</td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td>
                Tabalong, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                
                Pimpinan,
                <br/><br/><br/><br/><br/>


                <b><u>Fauzan</u></b><br/>
                

            </td>
        </tr>
    </table>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

$(document).ready(function(){
    window.print();
});
</script>
</html>
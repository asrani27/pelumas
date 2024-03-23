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
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN KARYAWAN</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Jabatan</th>
        </tr>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td style="text-align: center">{{$item->nik}}</td>
                <td style="text-align: center">{{$item->nama}}</td>
                <td style="text-align: center">{{$item->telp}}</td>
                <td style="text-align: center">{{$item->jabatan->nama}}</td>
                
            </tr>
        @endforeach
    </table>
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
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
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN SERVICE & PENJUALAN</u></strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>Tgl</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Mobil</th>
            <th>Nopol</th>
            <th>Karyawan</th>
            <th>Detail</th>
        </tr>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td style="text-align: center">{{\Carbon\Carbon::parse($item->created_at)->format('d-M-Y')}}</td>
                <td style="text-align: center">{{$item->nama}}</td>
                <td style="text-align: center">{{$item->alamat}}</td>
                <td style="text-align: center">{{$item->telp}}</td>
                <td style="text-align: center">{{$item->jenis_mobil}}</td>
                <td style="text-align: center">{{$item->nopol}}</td>
                <td style="text-align: center">{{$item->karyawan->nama}}</td>
                <td>
                    <table border="1" cellpadding="5px" cellspacing="0px">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                        @foreach ($item->detail as $key2 => $item2)
                            <tr>
                                <td>{{$key2+1}}</td>
                                <td>{{$item2->nama}}</td>
                                <td>{{number_format($item2->harga)}}</td>
                                <td>{{$item2->jumlah}}</td>
                                <td>{{number_format($item2->total)}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>TOTAL</td>
                            <td>{{number_format($item->detail->sum('total'))}}</td>
                        </tr>
                    </table>
                </td>
                
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
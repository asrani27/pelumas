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
            <td colspan=3 style="text-align:center"><br/><strong><u>KUITANSI PEMBAYARAN</u></strong></td>
        </tr>
    </table>
    <br/>
    <table  width="100%">
        <tr>
            <td width="65%">
                <table border=0 cellspacing="0" cellpadding="3">
                    <tr>
                        <th style="text-align: left">Tgl</th>
                        <th style="text-align: left">: {{$data->created_at}}</th>
                    </tr>
                    <tr>
                        <th style="text-align: left">Nama</th>
                        <th style="text-align: left">: {{$data->nama}}</th>
                    </tr>
                    <tr>
                        <th style="text-align: left">Alamat</th>
                        <th style="text-align: left">: {{$data->alamat}}</th>
                    </tr>
                </table>
            </td>
            <td>
                
                <table border=0 cellspacing="0" cellpadding="3">
                    <tr>
                        <th style="text-align: left">Telp</th>
                        <th style="text-align: left">: {{$data->telp}}</th>
                    </tr>
                    <tr>
                        <th style="text-align: left">Mobil</th>
                        <th style="text-align: left">: {{$data->jenis_mobil}}</th>
                    </tr>
                    <tr>
                        <th style="text-align: left">Nopol</th>
                        <th style="text-align: left">: {{$data->nopol}}</th>
                    </tr>
                    <tr>
                        <th style="text-align: left">Karyawan</th>
                        <th style="text-align: left">: {{$data->karyawan->nama}}</th>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%">
    <td colspan=3 style="text-align:center"><br/><strong><u>DETAIL TRANSAKSI</u></strong></td>
    </table>

    <table width="100%"  border=1 cellspacing="0" cellpadding="3">
        @php
            $no =1;
        @endphp
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
        @foreach ($data->detail as $key2 => $item2)
            <tr>
                <td>{{$key2+1}}</td>
                <td>{{$item2->nama}}</td>
                <td>{{number_format($item2->harga)}}</td>
                <td style="text-align:center">{{$item2->jumlah}}</td>
                <td>{{number_format($item2->total)}}</td>
            </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>TOTAL</td>
            <td>{{number_format($data->detail->sum('total'))}}</td>
        </tr>
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%">Pelanggan,<br/><br/><br/><br/><br/>
            
                {{$data->nama}}
            </td>
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
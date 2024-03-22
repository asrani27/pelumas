<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Nasabah;
use App\Models\Deposito;
use App\Models\Pencairan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PencairanController extends Controller
{
    public function index()
    {
        $data = Pencairan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.pencairan.index', compact('data'));
    }

    public function create()
    {
        $deposito = Deposito::get();
        $nasabah = Nasabah::get();
        return view('admin.pencairan.create', compact('deposito', 'nasabah'));
    }

    public function check()
    {
        $deposito_id = request()->get('deposito_id');
        $deposito = Deposito::find($deposito_id);
        $tglhariini = Carbon::now()->format('Y-m-d');
        $selisih = Carbon::parse($deposito->tanggal)->diffInDays($tglhariini);
        if ($selisih <= 30) {
            Session::flash('info', 'Pencairan belum bisa di lakukan karena belum jatuh tempo, minimal 30 hari setelah deposit');
            return back();
        }
        $diffinmonth = Carbon::parse($deposito->tanggal)->diffInMonths($tglhariini);

        $deposito['profit_bunga'] = round(($deposito->jumlah_deposito * ($deposito->bunga / 100) * tenor($deposito->jangka_waktu)) / 365);
        $deposito['pajak_bunga'] = round((20 / 100) * $deposito['profit_bunga']);
        $deposito['total_pendapatan'] = round($deposito['profit_bunga'] - $deposito['pajak_bunga']);
        $deposito['pencairan'] = round($deposito->jumlah_deposito + $deposito['total_pendapatan']);


        return view('admin.pencairan.check', compact('deposito'));
    }
    public function edit($id)
    {
        $data = Pencairan::find($id);
        $deposito = Deposito::get();
        $nasabah = Nasabah::get();
        return view('admin.pencairan.edit', compact('data', 'deposito', 'nasabah'));
    }
    public function store(Request $req)
    {
        Pencairan::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pencairan');
    }
    public function update(Request $req, $id)
    {
        $data = Pencairan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pencairan');
    }
    public function delete($id)
    {
        $data = Pencairan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pencairan');
    }

    public function pencairan(Request $req)
    {
        $param = $req->all();
        $param['jumlah_deposito'] = str_replace(',', '', $req->jumlah_deposito);
        $param['pajak'] = str_replace(',', '', $req->pajak);
        $param['total_pendapatan'] = str_replace(',', '', $req->total_pendapatan);
        $param['pencairan'] = str_replace(',', '', $req->pencairan);
        $param['profit_bunga'] = str_replace(',', '', $req->profit_bunga);

        $check = Pencairan::where('deposito_id', $req->deposito_id)->first();
        if ($check == null) {

            Pencairan::create($param);
            Session::flash('success', 'Berhasil');
        } else {

            Session::flash('info', 'Deposito ini sudah di cairkan');
        }
        return redirect('/superadmin/pencairan');
    }
}

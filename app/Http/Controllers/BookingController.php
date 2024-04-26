<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\JenisLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function index()
    {
        $data = Booking::orderBy('tanggal', 'DESC')->paginate(15);
        return view('admin.booking.index', compact('data'));
    }

    public function create()
    {
        $layanan = JenisLayanan::get();
        return view('admin.booking.create', compact('layanan'));
    }
    public function edit($id)
    {
        $data = Booking::find($id);
        $layanan = JenisLayanan::get();
        return view('admin.booking.edit', compact('data', 'layanan'));
    }
    public function store(Request $req)
    {
        $param = $req->all();
        $param['layanan'] = json_encode($req->layanan);
        $check = Booking::where('nopol', $req->nama)->where('tanggal', $req->tanggal)->first();
        if ($check != null) {
            Session::flash('info', 'Nopol utk booking pada tanggal' . $req->tanggal . ' Sudah Ada');
            return back();
        } else {
            if (Booking::where('tanggal', $req->tanggal)->count() == 0) {
                $antrian = 1;
            } else {
                $antrian = Booking::where('tanggal', $req->tanggal)->orderBy('antrian', 'DESC')->get()->first()->antrian + 1;
            }
            $param['antrian'] = $antrian;
            Booking::create($param);
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/booking');
        }
    }
    public function update(Request $req, $id)
    {
        $param = $req->all();
        $param['layanan'] = json_encode($req->layanan);
        $data = Booking::find($id)->update($param);
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/booking');
    }
    public function delete($id)
    {
        $data = Booking::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/booking');
    }
}

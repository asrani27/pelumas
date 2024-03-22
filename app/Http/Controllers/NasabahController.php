<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NasabahController extends Controller
{
    public function index()
    {
        $data = Nasabah::orderBy('id', 'DESC')->paginate(15);
        return view('admin.nasabah.index', compact('data'));
    }

    public function create()
    {
        $pegawai = Pegawai::get();
        return view('admin.nasabah.create', compact('pegawai'));
    }
    public function edit($id)
    {
        $data = Nasabah::find($id);
        $pegawai = Pegawai::get();
        return view('admin.nasabah.edit', compact('data', 'pegawai'));
    }
    public function store(Request $req)
    {
        $check = Nasabah::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama nasabah Sudah Ada');
            return back();
        } else {
            Nasabah::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/nasabah');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Nasabah::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/nasabah');
    }
    public function delete($id)
    {
        $data = Nasabah::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/nasabah');
    }
}

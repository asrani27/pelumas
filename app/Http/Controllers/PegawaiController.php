<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::orderBy('id', 'DESC')->paginate(15);
        return view('admin.pegawai.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pegawai.create');
    }
    public function edit($id)
    {
        $data = Pegawai::find($id);
        return view('admin.pegawai.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Pegawai::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama pegawai Sudah Ada');
            return back();
        } else {
            Pegawai::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/pegawai');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Pegawai::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pegawai');
    }
    public function delete($id)
    {
        $data = Pegawai::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pegawai');
    }
}

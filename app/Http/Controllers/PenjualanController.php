<?php

namespace App\Http\Controllers;

use App\Models\JenisLayanan;
use App\Models\Karyawan;
use App\Models\MerkOli;
use App\Models\Penjualan;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenjualanController extends Controller
{
    public function index()
    {
        $data = Penjualan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.penjualan.index', compact('data'));
    }

    public function create()
    {
        $karyawan = Karyawan::get();
        return view('admin.penjualan.create', compact('karyawan'));
    }
    public function edit($id)
    {
        $data = Penjualan::find($id);
        $karyawan = Karyawan::get();
        return view('admin.penjualan.edit', compact('data', 'karyawan'));
    }
    public function transaksi($id)
    {
        $data = Penjualan::find($id);
        $layanan = JenisLayanan::get();
        $oli = MerkOli::get();
        $sparepart = Sparepart::get();
        return view('admin.penjualan.transaksi', compact('data', 'layanan', 'oli', 'sparepart'));
    }
    public function transaksiStore(Request $req)
    {
        dd($req->all());
    }
    public function store(Request $req)
    {
        $check = Penjualan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama penjualan Sudah Ada');
            return back();
        } else {
            Penjualan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/penjualan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Penjualan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penjualan');
    }
    public function delete($id)
    {
        $data = Penjualan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penjualan');
    }
}

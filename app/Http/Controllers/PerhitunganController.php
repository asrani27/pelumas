<?php

namespace App\Http\Controllers;

use App\Models\DataUji;
use App\Models\DataLatih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PerhitunganController extends Controller
{
    public function index()
    {
        $datalatih = DataLatih::get();
        $datauji = DataUji::get();
        return view('admin.perhitungan.index', compact('datalatih', 'datauji'));
    }

    public function createDataLatih()
    {
        return view('admin.perhitungan.create');
    }

    public function editDataLatih($id)
    {
        $data = DataLatih::find($id);
        return view('admin.perhitungan.edit', compact('data'));
    }
    public function editDataUji($id)
    {
        $data = DataUji::find($id);
        return view('admin.perhitungan.edit2', compact('data'));
    }

    public function updateDataLatih(Request $req, $id)
    {
        DataLatih::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/perhitungan');
    }

    public function updateDataUji(Request $req, $id)
    {
        DataUji::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/perhitungan');
    }


    public function storeDataLatih(Request $req)
    {
        DataLatih::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/perhitungan');
    }
    public function createDataUji()
    {
        return view('admin.perhitungan.create2');
    }
    public function storeDataUji(Request $req)
    {
        if (DataUji::first() == null) {
            DataUji::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/perhitungan');
        } else {
            Session::flash('info', 'Data uji sudah ada, data uji hanya bisa 1, hapus yang sebelumnya');
            return back();
        }
    }

    public function deleteDataLatih($id)
    {
        DataLatih::find($id)->delete();
        Session::flash('success', 'Berhasil dihapus');
        return back();
    }
    public function deleteDataUji($id)
    {
        DataUji::find($id)->delete();
        Session::flash('success', 'Berhasil dihapus');
        return back();
    }
}

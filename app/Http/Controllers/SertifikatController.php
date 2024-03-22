<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Deposito;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SertifikatController extends Controller
{
    public function index()
    {
        $data = Sertifikat::orderBy('id', 'DESC')->paginate(15);
        return view('admin.sertifikat.index', compact('data'));
    }

    public function create()
    {
        $deposito = Deposito::get();
        $nasabah = Nasabah::get();
        return view('admin.sertifikat.create', compact('deposito', 'nasabah'));
    }
    public function edit($id)
    {
        $data = Sertifikat::find($id);
        $deposito = Deposito::get();
        $nasabah = Nasabah::get();
        return view('admin.sertifikat.edit', compact('data', 'deposito', 'nasabah'));
    }
    public function store(Request $req)
    {
        Sertifikat::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/sertifikat');
    }
    public function update(Request $req, $id)
    {
        $data = Sertifikat::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/sertifikat');
    }
    public function delete($id)
    {
        $data = Sertifikat::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/sertifikat');
    }
}

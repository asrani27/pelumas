<?php

namespace App\Http\Controllers;

use App\Models\Setoran;
use App\Models\Deposito;
use App\Models\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SetoranController extends Controller
{
    public function index()
    {
        $data = Setoran::orderBy('id', 'DESC')->paginate(15);
        return view('admin.setoran.index', compact('data'));
    }

    public function create()
    {
        $deposito = Deposito::get();
        $nasabah = Nasabah::get();
        return view('admin.setoran.create', compact('deposito', 'nasabah'));
    }
    public function edit($id)
    {
        $data = Setoran::find($id);
        $deposito = Deposito::get();
        $nasabah = Nasabah::get();
        return view('admin.setoran.edit', compact('data', 'deposito', 'nasabah'));
    }
    public function store(Request $req)
    {
        Setoran::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/setoran');
    }
    public function update(Request $req, $id)
    {
        $data = Setoran::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/setoran');
    }
    public function delete($id)
    {
        $data = Setoran::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/setoran');
    }
}

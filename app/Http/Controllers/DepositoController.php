<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Deposito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepositoController extends Controller
{
    public function index()
    {
        $data = Deposito::orderBy('id', 'DESC')->paginate(15);
        return view('admin.deposito.index', compact('data'));
    }

    public function create()
    {
        $nasabah = Nasabah::get();
        $nomor = rand(100000, 999999);

        return view('admin.deposito.create', compact('nasabah', 'nomor'));
    }
    public function edit($id)
    {
        $data = Deposito::find($id);
        $nasabah = Nasabah::get();
        return view('admin.deposito.edit', compact('data', 'nasabah'));
    }
    public function store(Request $req)
    {
        Deposito::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/deposito');
    }
    public function update(Request $req, $id)
    {
        $data = Deposito::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/deposito');
    }
    public function delete($id)
    {
        $data = Deposito::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/deposito');
    }
}

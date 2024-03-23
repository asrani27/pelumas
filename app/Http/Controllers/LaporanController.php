<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bibit;
use App\Models\Deposito;
use App\Models\Jabatan;
use App\Models\JenisLayanan;
use App\Models\JenisOli;
use App\Models\Karyawan;
use App\Models\MerkOli;
use App\Models\Nasabah;
use App\Models\Pegawai;
use App\Models\Pencairan;
use App\Models\Pengajuan;
use App\Models\Penjualan;
use App\Models\Sertifikat;
use App\Models\Setoran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function index()
    {
        return view('admin.laporan.index');
    }
    public function karyawan()
    {
        $data = Karyawan::get();
        return view('admin.laporan.karyawan', compact('data'));
    }
    public function jenisoli()
    {
        $data = JenisOli::get();
        return view('admin.laporan.jenisoli', compact('data'));
    }

    public function merkoli()
    {
        $data = MerkOli::get();
        return view('admin.laporan.merkoli', compact('data'));
    }

    public function jenislayanan()
    {
        $data = JenisLayanan::get();
        return view('admin.laporan.jenislayanan', compact('data'));
    }

    public function jabatan()
    {
        $data = Jabatan::get();
        return view('admin.laporan.jabatan', compact('data'));
    }

    public function kuitansi($id)
    {
        $data = Penjualan::find($id);
        return view('admin.laporan.kuitansi', compact('data'));
    }

    public function periode(Request $req)
    {
        $from = $req->mulai;
        $to = $req->sampai;

        if ($req->jenis == 'penjualan') {
            $data = Penjualan::whereBetween('created_at', [$from, $to])->get();
            return view('admin.laporan.penjualan', compact('data', 'from', 'to'));
        }
    }
}

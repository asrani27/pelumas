<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bibit;
use App\Models\DataUji;
use App\Models\Jabatan;
use App\Models\MerkOli;
use App\Models\Nasabah;
use App\Models\Pegawai;
use App\Models\Setoran;
use App\Models\Deposito;
use App\Models\JenisOli;
use App\Models\Karyawan;
use App\Models\DataLatih;
use App\Models\Pencairan;
use App\Models\Pengajuan;
use App\Models\Penjualan;
use App\Models\Sparepart;
use App\Models\Sertifikat;
use App\Models\JenisLayanan;
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

    public function sparepart()
    {
        $data = Sparepart::get();
        return view('admin.laporan.sparepart', compact('data'));
    }

    public function hasil()
    {
        $datalatih = DataLatih::get();
        $datauji = DataUji::get();

        //perhitungan

        $perhitungan = DataLatih::get();
        $data = $perhitungan->map(function ($item, $value) use ($datauji) {
            if ($datauji->first() == null) {
                $jan = 0;
                $feb = 0;
                $mar = 0;
            } else {
                $jan = $datauji->first()->januari;
                $feb = $datauji->first()->februari;
                $mar = $datauji->first()->maret;
            }
            $nilai1 = $item->januari - $jan;
            $nilai2 = $item->februari - $feb;
            $nilai3 = $item->maret - $mar;
            $kuadrat1 = pow($nilai1, 2);
            $kuadrat2 = pow($nilai2, 2);
            $kuadrat3 = pow($nilai3, 2);

            $jumlahKuadrat = $kuadrat1 + $kuadrat2 + $kuadrat3;
            $hasil = sqrt($jumlahKuadrat);
            $item->ed = number_format($hasil, 2);
            return $item;
        });


        $sorted = $data->sortBy('ed')->values()->map(function ($item, $key) {
            $item->values = $key;
            return $item;
        });

        $data->map(function ($item)  use ($sorted) {

            $item->rank = $sorted->where('ed', $item->ed)->first()->values + 1;
            return $item;
        });

        return view('admin.laporan.hasil', compact('datalatih', 'datauji', 'data'));
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

<?php

namespace App\Http\Controllers;

use App\Models\Lurah;
use App\Models\DataUji;
use App\Models\DataLatih;
use App\Models\Tpermohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function superadmin()
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
        return view('admin.home', compact('datalatih', 'datauji', 'data'));
    }

    public function pemohon()
    {
        return view('pemohon.home');
    }

    public function updatelurah(Request $request)
    {
        Lurah::first()->update($request->all());
        Session::flash('success', 'Berhasil Diupdate');
        return back();
    }
}

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BibitController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MerkOliController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SetoranController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\JenisOliController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PencairanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\SerahTerimaController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\GantiPasswordController;

Route::get('/', function () {
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('lupa-password', [LupaPasswordController::class, 'index']);
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/', [LoginController::class, 'index']);
Route::get('fitur', [FrontController::class, 'fitur']);
Route::get('tim', [FrontController::class, 'tim']);
Route::get('partner', [FrontController::class, 'partner']);
Route::get('hubungikami', [FrontController::class, 'hubungikami']);
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);
    Route::get('superadmin/gp', [GantiPasswordController::class, 'index']);
    Route::post('superadmin/gp', [GantiPasswordController::class, 'update']);

    Route::get('superadmin/jabatan', [JabatanController::class, 'index']);
    Route::get('superadmin/jabatan/create', [JabatanController::class, 'create']);
    Route::post('superadmin/jabatan/create', [JabatanController::class, 'store']);
    Route::get('superadmin/jabatan/edit/{id}', [JabatanController::class, 'edit']);
    Route::post('superadmin/jabatan/edit/{id}', [JabatanController::class, 'update']);
    Route::get('superadmin/jabatan/delete/{id}', [JabatanController::class, 'delete']);

    Route::get('superadmin/karyawan', [KaryawanController::class, 'index']);
    Route::get('superadmin/karyawan/create', [KaryawanController::class, 'create']);
    Route::post('superadmin/karyawan/create', [KaryawanController::class, 'store']);
    Route::get('superadmin/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
    Route::post('superadmin/karyawan/edit/{id}', [KaryawanController::class, 'update']);
    Route::get('superadmin/karyawan/delete/{id}', [KaryawanController::class, 'delete']);

    Route::get('superadmin/jenisoli', [JenisOliController::class, 'index']);
    Route::get('superadmin/jenisoli/create', [JenisOliController::class, 'create']);
    Route::post('superadmin/jenisoli/create', [JenisOliController::class, 'store']);
    Route::get('superadmin/jenisoli/edit/{id}', [JenisOliController::class, 'edit']);
    Route::post('superadmin/jenisoli/edit/{id}', [JenisOliController::class, 'update']);
    Route::get('superadmin/jenisoli/delete/{id}', [JenisOliController::class, 'delete']);

    Route::get('superadmin/merkoli', [MerkOliController::class, 'index']);
    Route::get('superadmin/merkoli/create', [MerkOliController::class, 'create']);
    Route::post('superadmin/merkoli/create', [MerkOliController::class, 'store']);
    Route::get('superadmin/merkoli/edit/{id}', [MerkOliController::class, 'edit']);
    Route::post('superadmin/merkoli/edit/{id}', [MerkOliController::class, 'update']);
    Route::get('superadmin/merkoli/delete/{id}', [MerkOliController::class, 'delete']);

    Route::get('superadmin/sparepart', [SparepartController::class, 'index']);
    Route::get('superadmin/sparepart/create', [SparepartController::class, 'create']);
    Route::post('superadmin/sparepart/create', [SparepartController::class, 'store']);
    Route::get('superadmin/sparepart/edit/{id}', [SparepartController::class, 'edit']);
    Route::post('superadmin/sparepart/edit/{id}', [SparepartController::class, 'update']);
    Route::get('superadmin/sparepart/delete/{id}', [SparepartController::class, 'delete']);

    Route::get('superadmin/jenislayanan', [JenisLayananController::class, 'index']);
    Route::get('superadmin/jenislayanan/create', [JenisLayananController::class, 'create']);
    Route::post('superadmin/jenislayanan/create', [JenisLayananController::class, 'store']);
    Route::get('superadmin/jenislayanan/edit/{id}', [JenisLayananController::class, 'edit']);
    Route::post('superadmin/jenislayanan/edit/{id}', [JenisLayananController::class, 'update']);
    Route::get('superadmin/jenislayanan/delete/{id}', [JenisLayananController::class, 'delete']);

    Route::get('superadmin/penjualan', [PenjualanController::class, 'index']);
    Route::get('superadmin/penjualan/create', [PenjualanController::class, 'create']);
    Route::post('superadmin/penjualan/create', [PenjualanController::class, 'store']);
    Route::get('superadmin/penjualan/edit/{id}', [PenjualanController::class, 'edit']);
    Route::get('superadmin/penjualan/transaksi/{id}', [PenjualanController::class, 'transaksi']);
    Route::get('superadmin/penjualan/kwitansi/{id}', [LaporanController::class, 'kuitansi']);
    Route::post('superadmin/penjualan/transaksi/{id}', [PenjualanController::class, 'transaksiStore']);
    Route::post('superadmin/penjualan/edit/{id}', [PenjualanController::class, 'update']);
    Route::get('superadmin/penjualan/delete/{id}', [PenjualanController::class, 'delete']);
    Route::get('superadmin/penjualan/deletetransaksi/{id}', [PenjualanController::class, 'transaksiDelete']);

    Route::get('superadmin/perhitungan', [PerhitunganController::class, 'index']);
    Route::get('superadmin/perhitungan/datalatih/create', [PerhitunganController::class, 'createDataLatih']);
    Route::get('superadmin/perhitungan/datauji/create', [PerhitunganController::class, 'createDataUji']);
    Route::get('superadmin/perhitungan/datalatih/edit/{id}', [PerhitunganController::class, 'editDataLatih']);
    Route::post('superadmin/perhitungan/datalatih/edit/{id}', [PerhitunganController::class, 'updateDataLatih']);
    Route::get('superadmin/perhitungan/datauji/edit/{id}', [PerhitunganController::class, 'editDataUji']);
    Route::post('superadmin/perhitungan/datauji/edit/{id}', [PerhitunganController::class, 'updateDataUji']);
    Route::get('superadmin/perhitungan/datauji/delete/{id}', [PerhitunganController::class, 'deleteDataUji']);
    Route::get('superadmin/perhitungan/datalatih/delete/{id}', [PerhitunganController::class, 'deleteDataLatih']);
    Route::post('superadmin/perhitungan/datalatih/create', [PerhitunganController::class, 'storeDataLatih']);
    Route::post('superadmin/perhitungan/datauji/create', [PerhitunganController::class, 'storeDataUji']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::get('superadmin/laporan/karyawan', [LaporanController::class, 'karyawan']);
    Route::get('superadmin/laporan/jenisoli', [LaporanController::class, 'jenisoli']);
    Route::get('superadmin/laporan/merkoli', [LaporanController::class, 'merkoli']);
    Route::get('superadmin/laporan/jenislayanan', [LaporanController::class, 'jenislayanan']);
    Route::get('superadmin/laporan/jabatan', [LaporanController::class, 'jabatan']);
    Route::post('superadmin/laporan/periode', [LaporanController::class, 'periode']);
});

Route::group(['middleware' => ['auth', 'role:pemohon']], function () {
    Route::get('pemohon', [HomeController::class, 'pemohon']);
    Route::get('pemohon/gp', [GantiPasswordController::class, 'index']);
    Route::post('pemohon/gp', [GantiPasswordController::class, 'update']);
    Route::get('pemohon/pengajuan', [PengajuanController::class, 'index']);
    Route::get('pemohon/pengajuan/create', [PengajuanController::class, 'create']);
    Route::post('pemohon/pengajuan/create', [PengajuanController::class, 'store']);
    Route::get('pemohon/pengajuan/edit/{id}', [PengajuanController::class, 'edit']);
    Route::post('pemohon/pengajuan/edit/{id}', [PengajuanController::class, 'update']);
    Route::get('pemohon/pengajuan/delete/{id}', [PengajuanController::class, 'delete']);
    Route::get('pemohon/pengajuan/ajukan/{id}', [PengajuanController::class, 'ajukan']);
    Route::post('pemohon/pengajuan/bibit', [PengajuanController::class, 'storeBibit']);
    Route::get('pemohon/serahterima', [SerahTerimaController::class, 'pemohon_index']);
});

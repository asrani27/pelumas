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
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SetoranController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PencairanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\SerahTerimaController;
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
    Route::post('superadmin/sk/updatelurah', [HomeController::class, 'updatelurah']);

    Route::get('superadmin/user', [UserController::class, 'index']);
    Route::get('superadmin/user/create', [UserController::class, 'create']);
    Route::post('superadmin/user/create', [UserController::class, 'store']);
    Route::get('superadmin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('superadmin/user/edit/{id}', [UserController::class, 'update']);
    Route::get('superadmin/user/delete/{id}', [UserController::class, 'delete']);

    Route::get('superadmin/user', [UserController::class, 'index']);
    Route::get('superadmin/user/create', [UserController::class, 'create']);
    Route::post('superadmin/user/create', [UserController::class, 'store']);
    Route::get('superadmin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('superadmin/user/edit/{id}', [UserController::class, 'update']);
    Route::get('superadmin/user/delete/{id}', [UserController::class, 'delete']);

    Route::get('superadmin/pegawai', [PegawaiController::class, 'index']);
    Route::get('superadmin/pegawai/create', [PegawaiController::class, 'create']);
    Route::post('superadmin/pegawai/create', [PegawaiController::class, 'store']);
    Route::get('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::post('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'update']);
    Route::get('superadmin/pegawai/delete/{id}', [PegawaiController::class, 'delete']);

    Route::get('superadmin/nasabah', [NasabahController::class, 'index']);
    Route::get('superadmin/nasabah/create', [NasabahController::class, 'create']);
    Route::post('superadmin/nasabah/create', [NasabahController::class, 'store']);
    Route::get('superadmin/nasabah/edit/{id}', [NasabahController::class, 'edit']);
    Route::post('superadmin/nasabah/edit/{id}', [NasabahController::class, 'update']);
    Route::get('superadmin/nasabah/delete/{id}', [NasabahController::class, 'delete']);

    Route::get('superadmin/deposito', [DepositoController::class, 'index']);
    Route::get('superadmin/deposito/create', [DepositoController::class, 'create']);
    Route::post('superadmin/deposito/create', [DepositoController::class, 'store']);
    Route::get('superadmin/deposito/edit/{id}', [DepositoController::class, 'edit']);
    Route::post('superadmin/deposito/edit/{id}', [DepositoController::class, 'update']);
    Route::get('superadmin/deposito/delete/{id}', [DepositoController::class, 'delete']);

    Route::get('superadmin/setoran', [SetoranController::class, 'index']);
    Route::get('superadmin/setoran/create', [SetoranController::class, 'create']);
    Route::post('superadmin/setoran/create', [SetoranController::class, 'store']);
    Route::get('superadmin/setoran/edit/{id}', [SetoranController::class, 'edit']);
    Route::post('superadmin/setoran/edit/{id}', [SetoranController::class, 'update']);
    Route::get('superadmin/setoran/delete/{id}', [SetoranController::class, 'delete']);

    Route::get('superadmin/sertifikat', [SertifikatController::class, 'index']);
    Route::get('superadmin/sertifikat/create', [SertifikatController::class, 'create']);
    Route::post('superadmin/sertifikat/create', [SertifikatController::class, 'store']);
    Route::get('superadmin/sertifikat/edit/{id}', [SertifikatController::class, 'edit']);
    Route::post('superadmin/sertifikat/edit/{id}', [SertifikatController::class, 'update']);
    Route::get('superadmin/sertifikat/delete/{id}', [SertifikatController::class, 'delete']);

    Route::get('superadmin/pencairan', [PencairanController::class, 'index']);
    Route::get('superadmin/pencairan/check', [PencairanController::class, 'check']);
    Route::post('superadmin/pencairan/check', [PencairanController::class, 'pencairan']);
    Route::get('superadmin/pencairan/create', [PencairanController::class, 'create']);
    Route::post('superadmin/pencairan/create', [PencairanController::class, 'store']);
    Route::get('superadmin/pencairan/edit/{id}', [PencairanController::class, 'edit']);
    Route::post('superadmin/pencairan/edit/{id}', [PencairanController::class, 'update']);
    Route::get('superadmin/pencairan/delete/{id}', [PencairanController::class, 'delete']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::post('superadmin/laporan/periode', [LaporanController::class, 'periode']);
    Route::get('superadmin/laporan/pegawai', [LaporanController::class, 'pegawai']);
    Route::get('superadmin/laporan/nasabah', [LaporanController::class, 'nasabah']);
    Route::get('superadmin/laporan/stok', [LaporanController::class, 'stok']);
    Route::get('superadmin/laporan/pengajuan', [LaporanController::class, 'pengajuan']);
    Route::get('superadmin/laporan/validasi', [LaporanController::class, 'validasi']);
    Route::get('superadmin/laporan/serahterima', [LaporanController::class, 'serahterima']);
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

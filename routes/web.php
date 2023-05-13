<?php

use App\Http\Controllers\AgroController;
use App\Http\Controllers\MitraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/loginAgro', [AgroController::class, 'loginAgro'])->name('loginAgro');
Route::post('/loginAgro', [AgroController::class, 'authLoginAgro'])->name('loginAgro.auth');

Route::get('/registerAgro', [AgroController::class, 'registerAgro'])->name('registerAgro');
Route::post('/registerAgro', [AgroController::class, 'authRegisterAgro'])->name('authRegisterAgro');

Route::get('/homeAgro', [AgroController::class, 'homeAgro'])->name('homeAgro');
Route::get('/createProfilAgro', [AgroController::class, 'createProfilAgroFunc'])->name('createProfilAgro');
Route::get('/updateProfilAgro', [AgroController::class, 'updateProfilAgroFunc'])->name('updateProfilAgro');
Route::get('/detailCreateProfilAgro', [AgroController::class, 'detailCreateProfilAgroFunc'])->name('detailCreateProfilAgro');
Route::post('/create_profil', [AgroController::class, 'create_profil'])->name('create_profil');

Route::get('/pembayaranAgro', [AgroController::class, 'pembayaranFunc'])->name('pembayaranAgro');
Route::get('/detailPembayaranAgro', [AgroController::class, 'detailPembayaranFunc'])->name('detailPembayaranAgro');

Route::get('/transaksi', [AgroController::class, 'transaksiFunc'])->name('transaksi');
Route::get('/detailTransaksi', [AgroController::class, 'detailTransaksiFunc'])->name('detailTransaksi');


Route::get('/permintaanAgro', [AgroController::class, 'permintaanFunc'])->name('permintaanAgro');

Route::get('/kemitraanAgro', [AgroController::class, 'kemitraanFunc'])->name('kemitraanAgro');
Route::get('/tabelJumlahMitra', [AgroController::class, 'tabelJumlahMitraFunc'])->name('tabelJumlahMitra');
Route::get('/detailTabelJumlahMitra', [AgroController::class, 'detailTabelJumlahMitraFunc'])->name('detailTabelJumlahMitra');
Route::get('/tabelSuratBermitra', [AgroController::class, 'tabelSuratBermitraFunc'])->name('tabelSuratBermitra');
Route::get('/detailTabelSuratBermitra', [AgroController::class, 'detailTabelSuratBermitraFunc'])->name('detailTabelSuratBermitra');


Route::get('/pencatatanAgro', [AgroController::class, 'pencatatanFunc'])->name('pencatatanAgro');
Route::get('/perhitunganAgro', [AgroController::class, 'perhitunganFunc'])->name('perhitunganAgro');
Route::get('/tabelLaporan', [AgroController::class, 'tabelLaporanFunc'])->name('tabelLaporan');
Route::get('/detailTabelLaporan', [AgroController::class, 'detailTabelLaporanFunc'])->name('detailtTabelLaporan');
Route::post('/detailTabelLaporan', [AgroController::class, 'tambah_laporan'])->name('tambah_laporan');

Route::get('/mitraPembayaran', [AgroController::class, 'mitraPembayaranFunc'])->name('mitraPembayaran');
Route::get('/detailMitraPembayaran', [AgroController::class, 'detailMitraPembayaranFunc'])->name('detailMitraPembayaran');


/*==================================================================================================================== */

Route::get('/loginMitra', [MitraController::class, 'loginMitra'])->name('loginMitra');
Route::post('/loginMitra', [MitraController::class, 'authLoginMitra'])->name('loginMitra.auth');

Route::get('/registerMitra', [MitraController::class, 'registerMitra'])->name('registerMitra');
Route::post('/registerMitra', [MitraController::class, 'authRegisterMitra'])->name('authRegisterMitra');

Route::get('/homeMitra', [MitraController::class, 'homeMitra'])->name('homeMitra');
Route::get('/createProfilMitra', [MitraController::class, 'create_profilMitraFunc'])->name('createProfilMitra');
Route::get('/detailCreateProfilMitra', [MitraController::class, 'CreateDetail_ProfilMitraFunc'])->name('detailCreateeProfilMitra');
Route::post('/Create_ProfilMitra', [MitraController::class, 'Create_ProfilMitra'])->name('Create_ProfilMitra');
Route::get('/updateProfilMitra', [MitraController::class, 'updateProfilMitra'])->name('updateProfilMitra');

Route::get('/kemitraanMitra', [MitraController::class, 'kemitraanMitra'])->name('kemitraanMitra');
Route::get('/detailKemitraanMitra', [MitraController::class, 'detailKemitraanMitra'])->name('detailKemitraanMitra');
Route::get('/pembuatanFormulirMitra', [MitraController::class, 'pembuatanFormulirMitra'])->name('pembuatanFormulirMitra');
Route::post('/create_FormulirMitra', [MitraController::class, 'create_FormulirMitra'])->name('create_FormulirMitra');

Route::get('/pembayaranMitra', [MitraController::class, 'pembayaranMitra'])->name('pembayaranMitra');
Route::get('/detailPembayaranMitra', [MitraController::class, 'detailPembayaranMitra'])->name('detailPembayaranMitra');
Route::get('/uploadBukti', [MitraController::class, 'uploadBukti'])->name('uploadBukti');

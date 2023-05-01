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
Route::get('/registerAgro', [AgroController::class, 'registerAgro'])->name('registerAgro');
Route::post('/registerAgro', [AgroController::class, 'authRegisterAgro'])->name('authRegisterAgro');
Route::get('/homeAgro', [AgroController::class, 'homeAgro'])->name('homeAgro');
Route::get('/updateProfilAgro', [AgroController::class, 'updateProfilAgroFunc'])->name('updateProfilAgro');
Route::get('/detailUpdateProfilAgro', [AgroController::class, 'detailUpdateProfilAgroFunc'])->name('detailUpdateProfilAgro');
Route::get('/pembayaranAgro',[AgroController::class, 'pembayaranFunc'])->name('pembayaranAgro');
Route::get('/detailPembayaranAgro',[AgroController::class, 'detailPembayaranFunc'])->name('detailPembayaranAgro');
Route::get('/permintaanAgro', [AgroController::class, 'permintaanFunc'])->name('permintaanAgro');
Route::get('/kemitraanAgro', [AgroController::class, 'kemitraanFunc'])->name('kemitraanAgro');
Route::get('/pencatatanAgro', [AgroController::class, 'pencatatanFunc'])->name('pencatatanAgro');
Route::get('/tabelLaporanAgro', [AgroController::class, 'tabelLaporanFunc'])->name('tabelLaporanAgro');
Route::get('/detailTabelLaporanAgro', [AgroController::class, 'detailTabelLaporanFunc'])->name('detailtTabelLaporanAgro');

Route::get('/loginMitra', [MitraController::class, 'loginMitra'])->name('loginMitra');
Route::get('/registerMitra', [MitraController::class, 'registerMitra'])->name('registerMitra');
Route::get('/homeMitra', [MitraController::class, 'homeMitra'])->name('homeMitra');
Route::get('/updateProfilMitra', [MitraController::class, 'updateProfilMitra'])->name('updateProfilMitra');
Route::get('/detailUpdateProfilMitra', [MitraController::class, 'detailUpdateProfilMitra'])->name('detailUpdateProfilMitra');
Route::get('/kemitraanMitra', [MitraController::class, 'kemitraanMitra'])->name('kemitraanMitra');
Route::get('/detailKemitraanMitra', [MitraController::class, 'detailKemitraanMitra'])->name('detailKemitraanMitra');
Route::get('/pembuatanFormulirMitra', [MitraController::class, 'pembuatanFormulirMitra'])->name('pembuatanFormulirMitra');
Route::get('/pembayaranMitra', [MitraController::class, 'pembayaranMitra'])->name('pembayaranMitra');
Route::get('/detailPembayaranMitra', [MitraController::class, 'detailPembayaranMitra'])->name('detailPembayaranMitra');
Route::get('/uploadBukti', [MitraController::class, 'uploadBukti'])->name('uploadBukti');
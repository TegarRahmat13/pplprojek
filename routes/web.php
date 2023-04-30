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

Route::get('/login', [AgroController::class, 'login'])->name('login');
Route::get('/register', [AgroController::class, 'register'])->name('register');
Route::get('/home', function () {
    return view('agro.home');
});

Route::get('/profil', [AgroController::class, 'profilFunc'])->name('profil');
Route::get('/pembayaran', function () {
    return view('agro.pembayaran');
});

Route::get('/detailPembayaran', function () {
    return view('agro.detailPembayaran');
});


Route::get('/permintaan', [AgroController::class, 'permintaanFunc'])->name('permintaan');
Route::get('/kemitraan', [AgroController::class, 'kemitraanFunc'])->name('kemitraan');
Route::get('/pencatatan', [AgroController::class, 'pencatatanFunc'])->name('pencatatan');
Route::get('/tabelLaporan', [AgroController::class, 'tabelLaporanFunc'])->name('tabelLaporan');
Route::get('/detailTabelLaporan', [AgroController::class, 'detailTabelLaporanFunc'])->name('detailtTabelLaporan');

Route::get('/loginMitra', [MitraController::class, 'loginMitra'])->name('loginMitra');
Route::get('/registerMitra', [MitraController::class, 'registerMitra'])->name('registerMitra');
Route::get('/homeMitra', [MitraController::class, 'homeMitra'])->name('homeMitra');
Route::get('/kemitraanMitra', [MitraController::class, 'kemitraanMitra'])->name('kemitraanMitra');
Route::get('/detailKemitraanMitra', [MitraController::class, 'detailKemitraanMitra'])->name('detailKemitraanMitra');
Route::get('/pembuatanFormulirMitra', [MitraController::class, 'pembuatanFormulirMitra'])->name('pembuatanFormulirMitra');
Route::get('/pembayaranMitra', [MitraController::class, 'pembayaranMitra'])->name('pembayaranMitra');
Route::get('/detailPembayaranMitra', [MitraController::class, 'detailPembayaranMitra'])->name('detailPembayaranMitra');
Route::get('/uploadBukti', [MitraController::class, 'uploadBukti'])->name('uploadBukti');
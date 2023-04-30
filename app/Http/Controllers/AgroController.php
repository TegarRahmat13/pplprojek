<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgroController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function login()
    {
        return view('agro.login');
    }
    public function register()
    {
        return view('agro.register');
    }
    public function profilFunc()
    {
        return view('agro.profil');
    }
    public function permintaanFunc()
    {
        return view('agro.permintaan');
    }

    public function kemitraanFunc()
    {
        return view('agro.kemitraan');
    }
    public function pencatatanFunc()
    {
        return view('agro.pencatatan');
    }
    public function tabelLaporanFunc()
    {
        return view('agro.tabelLaporan');
    }
    public function detailTabelLaporanFunc()
    {
        return view('agro.detailTabelLaporan');
    }
}

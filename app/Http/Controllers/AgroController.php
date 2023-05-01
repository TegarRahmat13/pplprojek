<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AgroController extends Controller
{
    public function loginAgro()
    {
        return view('agro.loginAgro');
    }
    public function registerAgro()
    {
        return view('agro.registerAgro');
    }
    public function authRegisterAgro(Request $req)
    {
        if ($req->password == $req->cpassword) {
            # code...
            $checkEmail = DB::table('users')
                            ->where('email', $req->email)
                            ->get();
            if ($checkEmail->count() == 0) {
                # code...
                DB::table('users')
                    ->insert([
                        'name' => $req->name,
                        'email' => $req->email,
                        'password' => md5($req->password),
                        'image' => 'profile.png',
                        'role' => 'ClientData',
                        'created_at' => date('Y-m-d H:i:s'),
                    ]);
                Session::flash('msg', 'Register Berhasil!');
            } else {
                Session::flash('msg', 'Email Sudah Terdaftar!');
            }
        } else {
            Session::flash('msg', 'Password Tidak Sama!');
        }
        return back();
    }
    public function homeAgro()
    {
        return view('agro.homeAgro');
    }
    public function updateProfilAgroFunc()
    {
        return view('agro.updateProfilAgro');
    }
    public function detailUpdateProfilAgroFunc()
    {
        return view('agro.detailUpdateProfilAgro');
    }
    public function pembayaranFunc()
    {
        return view('agro.pembayaranAgro');
    }
    public function permintaanFunc()
    {
        return view('agro.permintaanAgro');
    }

    public function kemitraanFunc()
    {
        return view('agro.kemitraanAgro');
    }
    public function pencatatanFunc()
    {
        return view('agro.pencatatanAgro');
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

<?php

namespace App\Http\Controllers;

use App\Models\ClientData;
use App\Models\laporan;
use App\Models\User;
use CreateLaporan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
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
        DB::beginTransaction();
        try {
            if ($req->cpassword != $req->password) {
                DB::rollBack();
                return redirect()->back()->with("error", "Password Tidak Sama!");
            }
            $user = User::whereEmail($req->email)->first();
            if ($user) {
                DB::rollBack();
                return redirect()->back()->with("error", "Email sudah terdaftar");
            }
            User::create([
                "name" => $req->name,
                "email" => $req->email,
                "password" => bcrypt($req->password),
                "role" => "Agro"
            ]);
            DB::commit();
            return redirect("/loginAgro");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
        /*if ($req->password == $req->cpassword) {
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
        return back();*/
    }

    public function authLoginAgro(Request $req)
    {
        $credentials = $req->only("email", "password");
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect("/homeAgro");
        }
        return redirect()->back();
    }
    public function homeAgro()
    {
        return view('agro.homeAgro');
    }
    public function createProfilAgroFunc()
    {
        return view('agro.createProfilAgro');
    }
    public function detailCreateProfilAgroFunc()
    {
        return view('agro.detailCreateProfilAgro');
    }

    public function create_profil(Request $request)
    {   
        $image= $request->update_image->store('avatar', 'public');
        ClientData::create([
            'user_id'=>Auth::user()->id,
            'namausaha'=>$request->update_namausaha,
            'alamat'=>$request->update_alamat,
            'nomor_telp'=>$request->update_nomortelp,
            'deskripsi'=>$request->update_deskripsi,
            'harga'=>$request->update_harga,
            'image'=>$image,
        ]);

        return redirect('updateProfilAgro');
    }
    public function updateProfilAgroFunc()
    {
        return view('agro.updateProfilAgro');
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
    public function tabelJumlahMitraFunc()
    {
        return view ('agro.tabelJumlahMitra');
    }
    public function detailTabelJumlahMitraFunc()
    {
        return view ('agro.detailTabelJumlahMitra');
    }
    public function tabelSuratBermitraFunc()
    {
        return view('agro.tabelSuratBermitra');
    }
    public function detailTabelSuratBermitraFunc()
    {
        return view('agro.detailTabelSuratBermitra');
    }
    public function pencatatanFunc()
    {
        return view('agro.pencatatanAgro');
    }
    public function tabelLaporanFunc()
    {
        return view('agro.tabelLaporan')->with([
            'laporans'=>laporan::all()
        ]);
    }
    public function detailTabelLaporanFunc()
    {
        return view('agro.detailTabelLaporan');
    }

    public function tambah_laporan(Request $request)
    {
        laporan::create([
            'user_id'=>Auth::user()->id,
            'tgl_produksi'=>$request->tgl_produksi,
            'deskripsi'=>$request->deskripsi,
            'produksi_awal'=>$request->produksi_awal,
            'produksi_akhir'=>$request->produksi_akhir,
        ]);

        return redirect('tabelLaporan');
    }
}

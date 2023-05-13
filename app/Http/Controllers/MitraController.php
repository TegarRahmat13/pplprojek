<?php

namespace App\Http\Controllers;

use App\Models\ClientData;
use App\Models\formulir;
use App\Models\MitraData;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MitraController extends Controller
{
    public function loginMitra()
    {
        return view('mitra.loginMitra');
    }
    public function authLoginMitra(Request $req)
    {
        $credentials = $req->only("email", "password");
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect("/homeMitra")->with("success", "Login sukses");
        }
        return redirect()->back()->with("error", "Maaf akun atau password belum terdaftar. Silahkan registrasi");
    }
    public function registerMitra()
    {
        return view('mitra.registerMitra');
    }
    public function authRegisterMitra(Request $req)
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
                "role" => "Mitra"
            ]);
            DB::commit();
            return redirect("/loginMitra")->with("success", "Registrasi sukses");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
    }


    public function homeMitra()
    {
        return view('mitra.homeMitra');
    }

    public function create_profilMitraFunc()
    {
        return view('mitra.createProfilMitra');
    }
    public function CreateDetail_ProfilMitraFunc()
    {
        return view('mitra.detailCreateProfilMitra');
    }
    public function Create_ProfilMitra(Request $request)
    {
        MitraData::create([
            'user_id' => Auth::user()->id,
            'namausaha' => $request->update_namausaha,
            'alamat' => $request->update_alamat,
            'nomor_telp' => $request->update_nomortelp,
            'deskripsi' => $request->update_deskripsi,
            'image' => $request->update_image,
        ]);

        return redirect('updateProfilMitra');
    }
    public function updateProfilMitra()
    {

        return view('mitra.updateProfilMitra');
    }
    public function detailUpdateProfilMitra()
    {
        return view('mitra.detailUpdateProfilMitra');
    }
    public function kemitraanMitra()
    {
        return view('mitra.kemitraanMitra')->with([
            'kemitraan' => ClientData::all()
        ]);
    }
    public function detailKemitraanMitra()
    {
        return view('mitra.detailKemitraanMitra')->with([
            'Detail_kemitraan' => ClientData::all()
        ]);
    }
    public function pembuatanFormulirMitra()
    {
        return view('mitra.pembuatanFormulirMitra');
    }
    public function create_FormulirMitra(Request $request)
    {
        formulir::create([
            'user_id' => Auth::user()->id,
            'name' => $request->update_nama,
            'namausaha' => $request->update_namausaha,
            'alamat' => $request->update_alamat,
            'nik' => $request->update_nik,
            'kode_pos' => $request->update_kodePos,
            'nomor_telp' => $request->update_nomortelp,
            'deskripsi' => $request->update_deskripsi,
            'alasan' => $request->update_alasan,
            'permintaan' => $request->update_permintaan,
        ]);

        return redirect('kemitraanMitra');
    }
    public function pembayaranMitra()
    {
        return view('mitra.pembayaranMitra');
    }
    public function detailPembayaranMitra()
    {
        return view('mitra.detailPembayaranMitra');
    }
    public function uploadBukti()
    {
        return view('mitra.uploadBukti');
    }
}

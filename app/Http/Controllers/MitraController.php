<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function loginMitra() 
    {
        return view('mitra.loginMitra');
    }
    public function registerMitra() 
    {
        return view('mitra.registerMitra');
    }
    public function homeMitra() 
    {
        return view('mitra.homeMitra');
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
        return view('mitra.kemitraanMitra');
    }
    public function detailKemitraanMitra() 
    {
        return view('mitra.detailKemitraanMitra');
    }
    public function pembuatanFormulirMitra() 
    {
        return view('mitra.pembuatanFormulirMitra');
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
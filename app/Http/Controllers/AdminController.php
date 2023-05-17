<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homeAdminFunc()
    {
        return view('admin.home');
    }
    public function profilFunc()
    {
        return view('admin.profilAdmin');
    }
    public function createProfilFunc()
    {
        return view('admin.createProfil');
    }
    public function updateProfilFunc()
    {
        return view('admin.updateProfil');
    }
}

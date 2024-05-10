<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;

class PetugasController extends Controller
{
    public function index(){
        return view('petugas.kelolaPerangkat');
    }
    
    public function detailPerangkat(){
        return view('petugas.detailPerangkat');
    }

    public function formRequestLokasi(){
        return view('petugas.formRequestLokasi');
    }

    public function formRequestPemasangan(){
        return view('petugas.formRequestPemasangan');
    }

    public function formRequestIntegrasi(){
        return view('petugas.formRequestIntegrasi');
    }

    public function formRequestKonfirmasi(){
        return view('petugas.formRequestKonfirmasi');
    }

    public function laporanPengaduan(){
        return view('petugas.laporanPengaduan');
    }

    public function detailPengaduan(){
        return view('petugas.detailPengaduan');
    }
}

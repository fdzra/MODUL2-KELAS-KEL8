<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenggunaanAir;
use App\Models\TargetPenggunaanAir;

class PenggunaanAirController extends Controller
{
    public function index()
    {
        // Mengambil data penggunaan air dari database
        $dataPenggunaanAir = PenggunaanAir::all();
        $targetPenggunaanAir = TargetPenggunaanAir::first();
        
        // Mengirimkan data ke view 'dashboardpelanggan.index'
        return view('dashboardpelanggan.index', compact(['dataPenggunaanAir', 'targetPenggunaanAir']));
    }
}


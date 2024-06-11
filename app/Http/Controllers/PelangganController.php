<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Models\TargetPenggunaanAir;

class PelangganController extends Controller
{
    public function index()
    {
        // Memuat data target penggunaan air dari database
        $targetPenggunaanAir = TargetPenggunaanAir::first();

        // Mengirim data target penggunaan air ke tampilan beranda
        return view('dashboardpelanggan.index', compact('targetPenggunaanAir'));
    }
 }   



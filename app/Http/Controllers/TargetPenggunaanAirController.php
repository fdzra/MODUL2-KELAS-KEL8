<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TargetPenggunaanAir;

class TargetPenggunaanAirController extends Controller
{
    public function index()
    {
        // Mengambil data target penggunaan air dari database
        $targetPenggunaanAir = TargetPenggunaanAir::firstOrNew();

        // Mengirimkan data ke view target_penggunaan_air.blade.php
        return view('dashboardpelanggan.index', compact('targetPenggunaanAir'));
    }

    public function update(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'target_penggunaan_air' => 'required|numeric'
        ]);

        // Mengambil data target penggunaan air dari database atau membuat data baru jika tidak ada
        $targetPenggunaanAir = TargetPenggunaanAir::firstOrNew();

        // Menyimpan data yang diperbarui dari form ke dalam model
        $targetPenggunaanAir->target_penggunaan_air = $request->target_penggunaan_air;
        $targetPenggunaanAir->save();

        // Mengambil kembali data yang baru disimpan
        $targetPenggunaanAir = TargetPenggunaanAir::firstOrNew();

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect('/admin/pelanggan')->with('success', 'Target penggunaan air berhasil disimpan.');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\LaporanPengaduan;
use App\Http\Requests\StorePengaduanRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
class LaporanPengaduanController
{
    public function index()
    {
        $belumDiproses = LaporanPengaduan::where('status_pengaduan', 'Belum Diproses')->get();
        $sedangDiproses = LaporanPengaduan::where('status_pengaduan', 'Sedang Diproses')->get();
        $sudahSelesai = LaporanPengaduan::where('status_pengaduan', 'Sudah Selesai')->get();
    
        $belumDiprosesCount = count($belumDiproses);
        $sedangDiprosesCount = count($sedangDiproses);
        $sudahSelesaiCount = count($sudahSelesai);
    
        return view('Laporan-Pengaduan/index', compact('belumDiproses', 'sedangDiproses', 'sudahSelesai', 'belumDiprosesCount', 'sedangDiprosesCount', 'sudahSelesaiCount'));
    }
    
    public function create()
    {
        return view('Laporan-Pengaduan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengaduanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengaduanRequest $request):RedirectResponse
    {
        //digunakan untuk validasi kemudian kalau ok tidak ada masalah baru disimpan ke db
        $validated = $request->validate([
            'kategori' => 'required',
            'deskripsi' => 'required',
            'bukti_pengaduan' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('bukti_pengaduan');
        $image->storeAs('public/posts', $image->hashName());

        $date = Carbon::now(); 
        // masukkan ke db
        LaporanPengaduan::create([
            'kategori'        => $request->kategori,
            'deskripsi'       => $request->deskripsi,
            'bukti_pengaduan' => $image->hashName(),
            'waktu_pengaduan ' => $date,
            'status_pengaduan' => 'Belum Diproses', // Ubah status default sesuai kebutuhan
        ]);

        return redirect()->route('laporan-pengaduan.index')->with('success', 'Data Berhasil di Input');


    }
    public function updateStatus(Request $request, LaporanPengaduan $laporan_pengaduan): RedirectResponse
    {
        $request->validate([
            'status_pengaduan' => 'required|in:Belum Diproses,Sedang Diproses,Sudah Selesai',
        ]);

        $laporan_pengaduan->update([
            'status_pengaduan' => $request->status_pengaduan,
        ]);

        return redirect()->route('laporan-pengaduan.index')->with('success', 'Status Laporan Pengaduan berhasil diperbarui');

    }
    public function show(LaporanPengaduan $laporan_pengaduan)
    {
        return view('laporan-pengaduan.show', compact('laporan_pengaduan'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;

class PetugasController extends Controller
{
    public function index(){
        $kelolaPerangkat = DB::table('perangkat')->get();
        // Contoh pengambilan jumlah "Belum Diproses" dari database
        $aktifCount = DB::table('perangkat')->where('status', 'Aktif')->count();
        $nonAktifCount = DB::table('perangkat')->where('status', 'Non Aktif')->count();
        return view('petugas.kelolaPerangkat', compact('kelolaPerangkat', 'aktifCount', 'nonAktifCount'));
    }
    
    public function detailPerangkat($id){
        $detailPerangkat = DB::table('perangkat')->where('id', $id)->first();
        return view('petugas.detailPerangkat', compact('detailPerangkat')); 
    }

    public function formRequestLokasi($id) {
        $request = DB::table('request_pemasangan')->where('id', $id)->first();
        return view('petugas.formRequestLokasi', compact('request'));
    }

    public function formRequestPemasangan($id){
        $request = DB::table('request_pemasangan')->where('id', $id)->first();
        DB::table('request_pemasangan')
            ->where('id', $id)
            ->update(['status' => 'Sedang Diproses']);
        return view('petugas.formRequestPemasangan', compact('request'));
    }

    public function store_pemasangan(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_perangkat' => 'required',
            'uid_perangkat' => 'required',
            'foto_pemasangan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'nama_perangkat.required'=>'NAMA DEVICE wajib diisi',
            'uid_perangkat.required'=>'DEVICE UID wajib diisi',
            'foto_pemasangan.required'=>'FOTO PEMASANGAN wajib diisi',
        ]);

        $requestPemasangan = DB::table('request_pemasangan')->where('id', $id)->first();

        if ($request->hasFile('foto_pemasangan')) {
            $foto = $request->file('foto_pemasangan');
            $nama_foto = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('uploads'), $nama_foto);
            $foto_path = 'uploads/' . $nama_foto;
        } else {
            $foto_path = null;
        }

        DB::table('request_pemasangan')
            ->where('id', $id)
            ->update([
                'nama_perangkat' => $request->nama_perangkat,
                'uid_perangkat' => $request->uid_perangkat,
                'foto_pemasangan' => $foto_path,
                'status' => 'Pemasangan Selesai'
            ]);

        return redirect()->route('request.konfirmasi', $id);
    }

    public function formRequestKonfirmasi($id){
        $request = DB::table('request_pemasangan')->where('id', $id)->first();
        return view('petugas.formRequestKonfirmasi', compact('request'));
    }

    public function submitSelesai($id, Request $request){
        // Ambil data request pemasangan berdasarkan id
        $requestPemasangan = DB::table('request_pemasangan')->where('id', $id)->first();
        DB::table('request_pemasangan')
            ->where('id', $id)
            ->update(['status' => 'Selesai']);
            // Redirect atau tampilkan pesan sukses
        return redirect()->route('petugas.dashboard')->with('success', 'Status request berhasil diubah.');
    }

    public function laporanPengaduan(){
        $laporanPengaduan = DB::table('pengaduan')->get();
        // Contoh pengambilan jumlah "Belum Diproses" dari database
        $belumDiprosesPengaduanCount = DB::table('pengaduan')->where('status_pengaduan', 'Belum Diproses')->count();
        $sedangDiprosesPengaduanCount = DB::table('pengaduan')->where('status_pengaduan', 'Sedang Diproses')->count();
        $sudahSelesaiPengaduanCount = DB::table('pengaduan')->where('status_pengaduan', 'Selesai')->count();
        return view('petugas.laporanPengaduan', compact('laporanPengaduan', 'belumDiprosesPengaduanCount', 'sedangDiprosesPengaduanCount', 'sudahSelesaiPengaduanCount'));
    }

    public function detailPengaduan(Request $request, $id)
    {
        if ($request->has('status_pengaduan')) {
            DB::table('pengaduan')
                ->where('id', $id)
                ->update(['status_pengaduan' => $request->input('status_pengaduan')]);
        }

        $detailPengaduan = DB::table('pengaduan')->where('id', $id)->first();
        return view('petugas.detailPengaduan', compact('detailPengaduan'));
    }

    public function selesaikanPengaduan(Request $request, $id)
    {
        $validatedData = $request->validate([
            'bukti_pengaduan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'bukti_pengaduan.required'=>'BUKTI PENYELESAIAN PENGADUAN wajib diisi',
        ]);

        if ($request->hasFile('bukti_pengaduan')) {
            $bukti_pengaduan = $request->file('bukti_pengaduan');
            $nama_bukti = time() . '_' . $bukti_pengaduan->getClientOriginalName();
            $bukti_pengaduan->move(public_path('uploads'), $nama_bukti);
            $bukti_path = 'uploads/' . $nama_bukti;
        } else {
            $bukti_path = null;
        }

        DB::table('pengaduan')
            ->where('id', $id)
            ->update([
                'bukti_pengaduan' => $bukti_path,
                'status_pengaduan' => 'Selesai',
                'terakhir_diupdate' => now()
            ]);

        return redirect()->route('pengaduan.dashboard')->with('success', 'Laporan pengaduan berhasil diselesaikan.');
    }
}

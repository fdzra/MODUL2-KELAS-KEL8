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
        return view('petugas.kelolaPerangkat');
    }
    
    public function detailPerangkat(){
        return view('petugas.detailPerangkat');
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
        return view('petugas.laporanPengaduan');
    }

    public function detailPengaduan(){
        return view('petugas.detailPengaduan');
    }
}

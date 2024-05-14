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

    public function formRequestIntegrasi($id){
        $request = DB::table('request_pemasangan')->where('id', $id)->first();
        return view('petugas.formRequestIntegrasi', compact('request'));
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

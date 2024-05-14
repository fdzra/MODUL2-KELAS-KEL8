<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        echo "Halo, selamat datang";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout>></a>";
    }
    function pelanggan(){
        echo "Halo, selamat datang di halaman Pelanggan";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout>></a>";
    }
    function kasir(){
        echo "Halo, selamat datang  di halaman Kasir";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout>></a>";
    }
    function petugas(){
        $requestPemasangan = DB::table('request_pemasangan')->get();
        // Contoh pengambilan jumlah "Belum Diproses" dari database
        $belumDiprosesCount = DB::table('request_pemasangan')->where('status', 'Belum Diproses')->count();
        $sedangDiprosesCount = DB::table('request_pemasangan')->where('status', 'Sedang Diproses')->count();
        $sudahSelesaiCount = DB::table('request_pemasangan')->where('status', 'Selesai')->count();
        return view('petugas.dashboard', compact('requestPemasangan', 'belumDiprosesCount', 'sedangDiprosesCount', 'sudahSelesaiCount'));
    }
    function admin(){
        echo "Halo, selamat datang  di halaman Admin";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout>></a>";
    }
}

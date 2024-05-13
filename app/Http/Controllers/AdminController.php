<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;

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
        echo "Halo, selamat datang  di halaman Petugas";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout>></a>";
    }
    function admin(){
        // echo "Halo, selamat datang  di halaman Admin";
        // echo "<h1>". Auth::user()->name ."</h1>";
        // echo "<a href='/logout'>Logout>></a>";
        return view('admin.dashboard');
    }
}

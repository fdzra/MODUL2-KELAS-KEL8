<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController
{
    public function getDataTransaksi(){
        $dt_transaksi = Transaksi::with('pelanggan')->paginate(5);
        return view('admin.admin-index', compact('dt_transaksi'));
    }
}

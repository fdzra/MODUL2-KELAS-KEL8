<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Perangkat;
use App\Models\Tracking_Transaksi;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KasirController extends Controller
{
    public function dashboard()
    {
        $user = User::all();
        $transaksi = Transaksi::all();
        return view('Kasir.kasirdashboard', compact(['user','transaksi']));
    }
    public function pembayaran()
    {
        return view('Kasir.kasirpembayaran');
    }
    public function store_pembayaran(Request $request)
    {
        if(isset($_POST['buat_pesanan_btn'])){

            $id_user = Auth::id();

            // Data Transaksinya
            $transaksi = new Transaksi;

            $transaksi->nama_pelanggan = $request->input('nama_pelanggan');
            $transaksi->no_handphone = $request->input('no_handphone');
            $transaksi->nama_perangkat = $request->input('nama_perangkat');
            $transaksi->penggunaan_debit_air = $request->input('penggunaan_debit_air');
            $transaksi->total = $request->input('total');
            $transaksi->keterangan = $request->input('keterangan');
            $transaksi->alamat = $request->input('alamat');

            $transaksi->save();

        };
    }
    public function detail_transaksi($id_transaksi)
    {
        if(Transaksi::where('id_transaksi', $id_transaksi)->exists())
        {
            $transaksi=Transaksi::find($id_transaksi);
            return view('Kasir.detailtransaksi', compact('transaksi'));
        }
        else
        {
            return redirect()->back()->with('status', 'Transaksi tidak ditemukan');
        }
    }

}

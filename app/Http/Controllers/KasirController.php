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


            // Data Tracking Transaksi

            /*

            Status Pembayaran = 0 (Pending)
                              , 1 (Pembyaran Berhasil)
                              , 2 (Cancel)
                              , 3 (dilanjutkan)
            */

            // $tracktra = rand(1111,9999);

            // $tt = new Tracking_Transaksi;

            // $tt->id_user = $id_user;
            // $tt->no_tracking = 'transaksi'.$tracktra;
            // // $tt->msg_tracking = "";
            // $tt->metode_pembayaran = 'm-banking';
            // // $tt->id_pembayaran = '$id_user';
            // $tt->status_pembayaran = "0";
            // $tt->notify = "0";

            // $tt->save();

            // $id_tt_terakhir = $tt->id_tracking_transaksi;

        };
    }

}

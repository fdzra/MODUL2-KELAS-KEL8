<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pelanggan;
use App\Models\Perangkat;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Tracking_Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KasirController extends Controller
{
    public function dashboard()
    {
        // $user = User::all();
        $transaksi = Transaksi::all();
        $user = DB::table('users')
        ->where('users.role', 'pelanggan')
        ->select('users.*')
        ->get();
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
        return redirect('/admin/kasir/dashboard');
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

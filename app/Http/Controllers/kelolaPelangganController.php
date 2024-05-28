<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\pelanggan;
use App\Models\Perangkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class kelolaPelangganController extends Controller
{
    public function read()
    {
    // Fetching pelanggan with users join
    $pelanggan = DB::table('pelanggans')
        ->join('users', 'pelanggans.id_pelanggan', '=', 'users.id')
        ->where('users.role', 'pelanggan')
        ->select('pelanggans.*')
        ->get();
    // Fetching perangkat with pelanggan join
    $perangkat = DB::table('perangkat')
        ->join('pelanggans', 'perangkat.id_pelanggan', '=', 'pelanggans.id_pelanggan')
        ->select('perangkat.*', 'pelanggans.id_pelanggan as pelanggan_id')
        ->get();
    // Mapping perangkat data to corresponding pelanggan
    $perangkatMap = $perangkat->keyBy('pelanggan_id');

    return view('admin.tes', compact('pelanggan', 'perangkatMap'));
    }
    public function create(){
        return view('admin.kelolaPelanggan_create');
    }

    public function store( Request $request){
        pelanggan::create($request->except(['_token','submit']));
        return redirect('/admin/admin/kelolaPelanggan');
    }
    
    public function edit($id){
        $pelanggan = pelanggan::find($id);
        $role = DB::table('users')
        ->where('id', $id)
        ->select('users.role')
        ->first();  
        $perangkat = DB::table('perangkat')
        ->join('pelanggans', 'perangkat.id_pelanggan', '=', 'pelanggans.id_pelanggan')
        ->where('perangkat.id_pelanggan', $id)
        ->select('perangkat.*', 'pelanggans.id_pelanggan as pelanggan_id')
        ->get();
        return view('admin.editPelanggan', compact(['pelanggan','perangkat','role']));
    }
    
    public function update($id, Request $request){
        $pelanggan = pelanggan::find($id);
        $pelanggan -> update($request->except(['_token','submit']));
        $perangkat = Perangkat::where('id_pelanggan', $id)->first();
        if ($perangkat) {
        $perangkat->update(['id_perangkat' => $request->id_perangkat]); 
        }
        $user = User::find($id);
        $user->update(['role' => $request->role]);
        return redirect('/admin/admin/kelolaPelanggan');
    }
    
    public function delete($id){
        $user = User::find($id);
        $user-> delete();
        $pelanggan = pelanggan::find($id);
        $pelanggan -> delete();
        return redirect('/admin/admin/kelolaPelanggan');
    }
}

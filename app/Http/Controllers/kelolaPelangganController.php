<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class kelolaPelangganController extends Controller
{
    public function read(){
        // $pelanggan= pelanggan::all();
        // $pelanggan = User::where('role', 'pelanggan')
        //                 ->with('pelanggan') // Eager load pelanggan relationship
        //                 ->get();
        $pelanggan = Pelanggan::join('users', 'pelanggans.pelanggan_id', '=', 'users.id')
            ->where('users.role', 'pelanggan')
            ->select('pelanggans.*') 
            ->get();
    
        return view('admin.tes', compact('pelanggan'));
        // return view('admin.kelolaPelanggan_read', compact('pelanggan'));
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
        return view('admin.editPelanggan', compact('pelanggan'));
    }
    
    public function update($id, Request $request){
        $pelanggan = pelanggan::find($id);
        $pelanggan -> update($request->except(['device_UID','_token','submit']));
        
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
<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class kelolaPetugasController extends Controller {
    
    public function index(){
        $petugas=Petugas::all();
        return view('admin.kelolaPetugas', compact(['petugas']));
    }
    public function create(){
        return view('admin.kelolaPetugas_create');
    }
    public function insert(Request $request){
        Petugas::create($request->all());
        return redirect('admin/admin/kelolaPetugas')-> with('success', 'Data berhasil ditambahkan');
    }
    public function edit($petugas_id){
        $data = Petugas::find($petugas_id);
        return view('admin.kelolaPetugas_edit', compact(['data']));
    }
    public function update(Request $request, $petugas_id){
        $data = Petugas::find($petugas_id);
        $data->update($request->all());
        return redirect('admin/admin/kelolaPetugas')-> with('success', 'Data berhasil diperbarui');
    }
    public function delete($petugas_id){
        $data = Petugas::find($petugas_id);
        $data->delete();
        return redirect('admin/admin/kelolaPetugas')->with('success', 'Data Berhasil Dihapus');
    }
}
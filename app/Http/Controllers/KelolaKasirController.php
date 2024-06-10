<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KelolaKasirController extends Controller
{
    public function index(){
        $kasir=Kasir::all();
        return view('admin.kelolaKasir', compact(['kasir']));
    }
    public function create(){
        return view('admin.kelolaKasir_create');
    }
    public function insert(Request $request){
        Kasir::create($request->all());
        return redirect('admin/admin/kelolaKasir')-> with('success', 'Data berhasil ditambahkan');
    }
    public function edit($kasir_id){
        $data = Kasir::find($kasir_id);
        return view('admin.kelolaKasir_edit', compact(['data']));
    }

    public function update(Request $request, $kasir_id){
        $data = Kasir::find($kasir_id);
        $data->update($request->all());
        return redirect('admin/admin/kelolaKasir')-> with('success', 'Data berhasil diperbarui');
    }
    public function delete($kasir_id){
        $data = Kasir::find($kasir_id);
        $data->delete();
        return redirect('admin/admin/kelolaKasir')->with('success', 'Data Berhasil Dihapus');
    }
}

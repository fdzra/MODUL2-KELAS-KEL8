<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class kelolaPetugasController extends Controller {
    
    public function index(){
        // $petugas=Petugas::all();
        $petugas = DB::table('petugas')
        ->join('users', 'petugas.petugas_id', '=', 'users.id')
        ->where('users.role', 'petugas')
        ->select('petugas.*')
        ->get();
        return view('admin.kelolaPetugas', compact(['petugas']));
    }
    public function create(){
        return view('admin.kelolaPetugas_create');
    }
    public function insert(Request $request){
        // Petugas::create($request->all());
        $userData = [
            'name' => $request->input('petugas_name'), // Replace with the actual form field name
            'email' => $request->input('petugas_email'), // Replace with the actual form field name
            'password' => bcrypt($request->input('petugas_password')), 
            'role' => 'petugas'// Replace with the actual form field name, hashed for security
        ];
    
        // Create a new User record with the specified fields
        $user = User::create($userData);

        // Retrieve the Kasir record associated with the new User
        $petugas = $user->petugas; // Assuming you have defined the relationship properly

        // Prepare the remaining Kasir data
        $petugasData = $request->all();

        // Update the existing Kasir record with the new data
        $petugas->update($petugasData);
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
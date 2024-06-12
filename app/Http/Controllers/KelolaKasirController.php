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
        // $kasir=Kasir::all();
        $kasir = DB::table('kelola_kasirs')
        ->join('users', 'kelola_kasirs.kasir_id', '=', 'users.id')
        ->where('users.role', 'kasir')
        ->select('kelola_kasirs.*')
        ->get();
        return view('admin.kelolaKasir', compact(['kasir']));
    }
    public function create(){
        return view('admin.kelolaKasir_create');
    }
    public function insert(Request $request){
        // Kasir::create($request->all());
        $userData = [
            'name' => $request->input('kasir_name'), // Replace with the actual form field name
            'email' => $request->input('kasir_email'), // Replace with the actual form field name
            'password' => bcrypt($request->input('kasir_password')), 
            'role' => 'kasir'// Replace with the actual form field name, hashed for security
        ];
    
        // Create a new User record with the specified fields
        $user = User::create($userData);

        // Retrieve the Kasir record associated with the new User
        $kasir = $user->kasir; // Assuming you have defined the relationship properly

        // Prepare the remaining Kasir data
        $kasirData = $request->all();

        // Update the existing Kasir record with the new data
        $kasir->update($kasirData);

        // // Extract the remaining fields for the Kasir model and associate with the User
        // $kasirData = $request->all();
        // $kasirData['kasir_id'] = $user->id; // Set the user_id to the newly created User's ID
        // // Create a new Kasir record
        // Kasir::update($kasirData);

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

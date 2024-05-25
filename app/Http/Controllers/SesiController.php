<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'pelanggan'){
                return redirect('admin/pelanggan');
            } elseif(Auth::user()->role == 'petugas'){
                return redirect('admin/petugas');
            } elseif(Auth::user()->role == 'kasir'){
                return redirect('admin/kasir');
            } elseif(Auth::user()->role == 'admin'){
                return redirect('admin/admin');
            }
        }else{
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }
    function logout(){
        Auth::logout();
        return redirect('');
    }
    function register()
    {
        return view('register');
    }
    function create(Request $request)
    {
        
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ],[
            'name.required'=>'Name wajib diisi',
            'email.required'=>'Email wajib diisi',
            'email.email'=>'Silakan masukkan email yang valid',
            'email.unique'=>'Email sudah terdaftar',
            'password.required'=>'Password wajib diisi',
            'password.min'=>'Minimum password adalah 6 karakter'
        ]);

        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];
        User::create($data);

        return view ('login');
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\RequestPemasangan;
use Illuminate\Http\Request;
use App\Http\Requests\StorePemasanganRequest;

class RequestPemasanganController
{
    public function index()
    {
        $requestPemasangan = RequestPemasangan::all(); // Mengambil semua data request pemasangan
        return view('request-pemasangan.index', compact('requestPemasangan'));
    }
    public function create()
    {
        return view('request-pemasangan.create');
    }
    public function show($id)
    {
    // Mengambil data request pemasangan berdasarkan ID
    $requestPemasangan = RequestPemasangan::findOrFail($id);

    // Mengirim data ke view untuk ditampilkan
    return view('request-pemasangan.show', compact('requestPemasangan'));
    }
    public function store(StorePemasanganRequest $request)
    {
        
    // Validasi input menggunakan form request
    $validatedData = $request->validated();

    // Menambahkan nilai untuk nomor_telepon
    $validatedData['nomor_telepon'] = $request->input('nomor_telepon'); // Ganti dengan nilai yang sesuai

    // Simpan data ke database
    RequestPemasangan::create($validatedData);

    return redirect()->route('request-pemasangan.index')->with('success', 'Data berhasil disimpan');
        }
}


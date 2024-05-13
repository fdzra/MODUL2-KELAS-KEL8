<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePemasanganRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nama' => 'required|string',
            'alamat_lengkap' => 'required|string',
            'nomor_telepon' => 'required|string',
            'umur' => 'required|string',
            'kecamatan' => 'required|string',
            'no_ktp' => 'required|string',
            'foto_ktp' => 'nullable|image',
            'nomor_kk' => 'nullable|string', // Aturan validasi yang memperbolehkan kolom ini kosong
            'kode_pos' => 'nullable|string', // Aturan validasi yang memperbolehkan kolom ini kosong
        ];
    }
    
    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'umur.required' => 'Umur wajib diisi.',
            'umur.numeric' => 'Umur harus berupa angka.',
            'umur.gt' => 'Umur harus lebih besar dari 0.', // Pesan kustom untuk aturan gt (greater than)
            'alamat_lengkap.required' => 'Alamat lengkap wajib diisi.',
            'kecamatan.required' => 'Kecamatan wajib diisi.',
            'kode_pos.required' => 'Kode pos wajib diisi.',
            'no_ktp.required' => 'Nomor KTP wajib diisi.',
            'foto_ktp.required' => 'Foto KTP wajib diunggah.',
            'nomor_kk.required' => 'Nomor KK wajib diisi.',
            // Tambahkan pesan validasi lainnya sesuai kebutuhan
        ];
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestPemasangan extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nama_perangkat',
    //     'uid_perangkat',
    //     'foto_pemasangan'
    //     // tambahkan kolom lainnya yang sesuai
    // ];

    #ilham
    protected $fillable = [
        'nama', 'alamat_lengkap', 'nomor_telepon', 'umur', 'kecamatan', 'no_ktp', 'foto_ktp', 'nomor_kk', 'kode_pos',
    ];
    

    protected $table = 'request_pemasangan';
}
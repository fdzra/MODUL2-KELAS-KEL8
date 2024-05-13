<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestPemasangan extends Model
{
    protected $table = 'request_pemasangan';

    protected $fillable = [
    'nama', 'alamat_lengkap', 'nomor_telepon', 'umur', 'kecamatan', 'no_ktp', 'foto_ktp', 'nomor_kk', 'kode_pos',
];

}

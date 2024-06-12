<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'petugas_id';

    protected $fillable = [
        'petugas_name','petugas_phone','petugas_email', 'petugas_username', 'petugas_password','petugas_kecamatan', 'petugas_alamat'
    ];

}



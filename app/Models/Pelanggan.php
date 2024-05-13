<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table= 'pelanggan';
    protected $fillable = [
        'id_user',
        'id_perangkat',
        'alamat',
        'kecamatan',
        'kota',
        'no_handphone',
    ];
}

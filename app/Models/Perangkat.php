<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    protected $table= 'perangkat';
    protected $fillable = [
        'id_perangkat',
        'status',
        'id_pelanggan',
        'kecamatan_pelanggan',
        'nama_perangkat',
        'penggunaan_debit_air',
    ];
}

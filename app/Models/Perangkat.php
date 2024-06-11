<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    protected $table= 'perangkat';
    protected $fillable = [
        'id_perangkat',
        'id_pelanggan',
        'nama_pelanggan',
        'status',
        'id_pelanggan',
        'kecamatan_pelanggan',
        'nama_perangkat',
        'penggunaan_debit_air',
    ];


    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }
}

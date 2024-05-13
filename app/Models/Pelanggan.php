<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pelanggan', 'nama_pelanggan', 'no_hp', 'alamat_pelanggan', 'keacamatan_pelanggan', 'kota_pelanggan'
    ];

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table= 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_tracking_transaksi',
        'id_user',
        'id_perangkat',
        'nama_pelanggan',
        'no_handphone',
        'nama_perangkat',
        'alamat',
        'keterangan',
        'penggunaan_debit_air',
        'total'
    ];
    #ilham
    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
}

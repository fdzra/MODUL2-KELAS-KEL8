<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $primaryKey = 'id_pelanggan';

    protected $fillable = [
        'id_perangkat', 'pelanggan_name', 'no_handphone', 'pelanggan_email',
        'alamat_pelanggan', 'kecamatan_pelanggan', 'kota_pelanggan'
    ];

    // public function user()
    // {
    //     // Define the relationship with User and filter by role 'pelanggan'
    //     return $this->belongsTo(User::class, 'user_id')->where('role', 'pelanggan');
    // }

    public static function boot()
    {
        parent::boot();

        static::updating(function ($pelanggan) {
            // Update the related Perangkat records
            $pelanggan->perangkat()->update(['id_pelanggan' => $pelanggan->id_pelanggan]);
        });
    }

    public function user()
    {
        // Define the relationship with User and filter by role 'pelanggan'
        return $this->belongsTo(User::class, 'user_id')->where('role', 'pelanggan');
    }

    public function perangkat()
    {
        return $this->hasMany(Perangkat::class, 'id_pelanggan', 'id_pelanggan');
    }

    #ilham
    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}

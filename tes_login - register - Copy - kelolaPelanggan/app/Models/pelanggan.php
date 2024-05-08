<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $primaryKey = 'pelanggan_id';

    protected $fillable = [
        'device_UID', 'pelanggan_name', 'pelanggan_phone', 'pelanggan_email',
        'pelanggan_alamat', 'pelanggan_kota', 'pelanggan_provinsi'
    ];

    public function user()
    {
        // Define the relationship with User and filter by role 'pelanggan'
        return $this->belongsTo(User::class, 'user_id')->where('role', 'pelanggan');
    }
}

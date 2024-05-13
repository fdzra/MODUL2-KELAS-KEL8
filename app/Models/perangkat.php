<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perangkat extends Model
{
    use HasFactory;
    protected $primaryKey = 'device_UID';

    protected $fillable = [
        'device_UID', 'id_perangkat','status_perangkat'
    ];

    public function perangkat()
    {
        // Define the relationship with User and filter by role 'pelanggan'
        return $this->belongsTo(Pelanggan::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking_Transaksi extends Model
{
    protected $table = 'tracking_transaksi';
    protected $fillable = [
        'id_user',
        'no_tracking',
        'msg_tracking',
        'metode_pembayaran',
        'id_pembayaran',
        'status_pembayaran',
        'notify'
    ];
}

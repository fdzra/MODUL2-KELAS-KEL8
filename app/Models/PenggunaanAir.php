<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaanAir extends Model
{
    protected $table = 'penggunaan_air';
    protected $fillable = ['bulan', 'tahun', 'penggunaan_air'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetPenggunaanAir extends Model
{
    // Nama tabel yang akan digunakan oleh model
    protected $table = 'target_penggunaan_air';

    // Atribut yang dapat diisi (fillable) secara mass assignment
    protected $fillable = ['target_penggunaan_air'];
}

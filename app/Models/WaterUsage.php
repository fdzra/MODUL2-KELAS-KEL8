<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterUsage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_perangkat',
        'timestamp',
        'penggunaan',
        'status',
    ];
}

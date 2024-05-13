<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    protected $table= 'perangkat';
    protected $fillable = [
        'status',
        'penggunaan_debit_air',
    ];
}

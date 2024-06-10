<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'kelola_kasirs';
    protected $primaryKey = 'kasir_id';

    protected $fillable = [
        'kasir_name','kasir_phone','kasir_email', 'kasir_username', 'kasir_password','kasir_alamat'
    ];

}
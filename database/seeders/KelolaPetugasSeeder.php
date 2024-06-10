<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelolaPetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petugas')->insert([
            'petugas_name'=>'Petugas 2',
            'petugas_phone'=>'0812131415',
            'petugas_email'=>'petugas2@gmail.com',
            'petugas_username'=>'petugas2',
            'petugas_password'=>'petugas222',
            'petugas_kecamatan'=>"dayeuhkolot",
            'petugas_alamat'=>"Jalan Umayah 1"

        ]);
    }
}

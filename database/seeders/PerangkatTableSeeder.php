<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerangkatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perangkat')->insert([
            [
                'id_perangkat' => 1,
                'id_pelanggan' => '1',
                'nama_pelanggan' => 'Pelanggan',
                'kecamatan_pelanggan' => '',
                'status' => 'Aktif',
                'nama_perangkat' => 'Device A',
                'penggunaan_debit_air' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

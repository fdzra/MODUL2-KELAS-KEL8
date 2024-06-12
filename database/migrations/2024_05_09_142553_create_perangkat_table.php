<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perangkat', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perangkat')->nullable();
            $table->string('id_pelanggan')->nullable();
            $table->string('nama_pelanggan')->nullable();
            $table->string('kecamatan_pelanggan')->nullable();
            $table->string('status')->default('Aktif');
            $table->string('nama_perangkat')->nullable();
            $table->integer('penggunaan_debit_air')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkat');
    }
};

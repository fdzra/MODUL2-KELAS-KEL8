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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->bigIncrements('id_pelanggan');
            $table->integer('id_user')->nullable();
            $table->string('pelanggan_name')->nullable();
            $table->string('pelanggan_email')->nullable();
            $table->integer('id_perangkat')->nullable();
            $table->text('alamat_pelanggan')->nullable();
            $table->string('kecamatan_pelanggan')->nullable();
            $table->string('kota_pelanggan')->nullable();
            $table->string('no_handphone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};

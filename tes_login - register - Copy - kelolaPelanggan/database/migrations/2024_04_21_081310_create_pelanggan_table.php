<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id('pelanggan_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('device_UID')->nullable();
            $table->string('pelanggan_name')->nullable();
            $table->string('pelanggan_phone')->nullable();
            $table->string('pelanggan_email')->nullable();
            $table->string('pelanggan_alamat')->nullable();
            $table->string('pelanggan_kota')->nullable();
            $table->string('pelanggan_provinsi')->nullable();
            $table->timestamps();

            $table->foreign('device_UID')->references('device_UID')->on('perangkat');
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

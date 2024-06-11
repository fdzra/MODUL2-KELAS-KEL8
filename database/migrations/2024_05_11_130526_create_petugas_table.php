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
        Schema::create('petugas', function (Blueprint $table) {
            $table->id('petugas_id');
            $table->string('petugas_name')->nullable();
            $table->bigInteger('petugas_phone')->nullable();
            $table->string('petugas_email')->nullable();
            $table->string('petugas_username')->nullable();
            $table->string('petugas_password')->nullable();
            $table->string('petugas_kecamatan')->nullable();
            $table->string('petugas_alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};

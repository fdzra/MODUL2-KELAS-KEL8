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
            $table->string('device_UID')->primary();
            $table->unsignedBigInteger('id_perangkat'); // Corrected data type
            $table->string('status_perangkat');
            $table->timestamps();
            
            $table->foreign('id_perangkat')->references('id')->on('detail_perangkat'); // Changed reference column
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

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
        Schema::create('konsumsi', function (Blueprint $table) {
            $table->id('id_konsumsi');
            $table->string('device_UID');
            $table->date('tanggal');
            $table->integer('jumlah_konsumsi');
            $table->timestamps();

            $table->foreign('device_UID')->references('device_UID')->on('perangkat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsumsi');
    }
};

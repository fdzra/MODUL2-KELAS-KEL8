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
        Schema::create('tracking_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_tracking_transaksi');
            $table->integer('id_user');
            $table->string('no_tracking');
            $table->string('msg_tracking')->nullable();
            $table->string('metode_pembayaran');
            $table->string('id_pembayaran')->nullable();
            $table->tinyInteger('status_pembayaran')->default('0');
            $table->tinyInteger('notify')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking_transaksi');
    }
};

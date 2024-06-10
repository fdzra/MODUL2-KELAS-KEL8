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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->integer('id_tracking_transaksi')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('id_perangkat')->nullable();
            $table->string('nama_pelanggan');
            $table->string('no_handphone');
            $table->string('nama_perangkat');
            $table->text('alamat');
            $table->string('keterangan');
            $table->integer('penggunaan_debit_air');
            $table->integer('total');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};

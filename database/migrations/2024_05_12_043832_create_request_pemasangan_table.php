<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestPemasanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_pemasangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->text('alamat_lengkap')->nullable();
            $table->string('nomor_telepon')->default('123456789'); // Ubah nilai default sesuai kebutuhan
            $table->string('umur')->nullable();
            $table->string('status')->nullable()->default('Belum Diproses');
            $table->string('kecamatan')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('nomor_kk')->nullable();
            $table->string('id_perangkat')->nullable();
            $table->string('nama_perangkat')->nullable();
            $table->string('foto_pemasangan')->nullable();
            $table->string('status_perangkat')->nullable()->default('Aktif');
            $table->timestamp('tanggal_pengajuan')->nullable();
            $table->timestamp('terakhir_diupdate')->nullable();
            $table->string('kode_pos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_pemasangan');
    }
}

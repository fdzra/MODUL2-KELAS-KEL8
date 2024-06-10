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
            $table->string('nama_pelanggan');
            $table->text('alamat_pelanggan');
            $table->string('no_handphone')->default('123456789'); // Ubah nilai default sesuai kebutuhan
            $table->string('status')->default('Belum Diproses');
            $table->string('umur');
            $table->string('kecamatan_pelanggan');
            $table->string('foto_pemasangan');
            $table->string('nama_perangkat');
            $table->string('uid_perangkat');
            $table->timestamp('tanggal_pengajuan')->nullable();
            $table->timestamp('terakhir_diupdate')->nullable();
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
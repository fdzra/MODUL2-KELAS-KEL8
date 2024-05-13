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
            $table->string('nama');
            $table->text('alamat_lengkap');
            $table->string('nomor_telepon')->default('123456789'); // Ubah nilai default sesuai kebutuhan
            $table->string('umur');
            $table->string('kecamatan');
            $table->string('no_ktp')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('nomor_kk')->nullable();
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
}
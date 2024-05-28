<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('water_usages', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perangkat')->nullable();
            $table->date('timestamp')->nullable();
            $table->integer('penggunaan')->nullable();
            $table->string('status', 10)->nullable();
            $table->timestamps();
        });
    
}
    public function down(): void
    {
        Schema::dropIfExists('water_usages');
    }
};

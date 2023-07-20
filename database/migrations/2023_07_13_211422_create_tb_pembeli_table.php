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
        Schema::create('tb_pembeli', function (Blueprint $table) {
            $table->increments('id_pembeli');
            $table->string('nama_pembeli', 25);
            $table->string('alamat_pembeli', 100);
            $table->string('no_hp', 256);
            $table->string('nik_pembeli', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pembeli');
    }
};

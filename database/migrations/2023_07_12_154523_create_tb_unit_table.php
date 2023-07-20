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
        Schema::create('tb_unit', function (Blueprint $table) {
            $table->increments('unit_id');
            $table->string('nama_unit', 25);
            $table->string('model_unit', 100);
            $table->string('unit_id_type', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_unit');
    }
};

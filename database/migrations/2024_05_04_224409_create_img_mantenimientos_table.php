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
        Schema::create('img_mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->string('ruta', 45);

            $table->unsignedBigInteger('minisplit_mural_mantenimiento_id')->nullable();

            $table->foreign('minisplit_mural_mantenimiento_id')->references('id')->on('minisplit_mural_mantenimientos')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('img_mantenimientos');
    }
};

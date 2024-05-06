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
        Schema::create('cambios_piezas', function (Blueprint $table) {
            $table->id();
            $table->string('estado_material', 5);

            $table->unsignedBigInteger('piezas_minisplit_mural_id')->nullable();
            $table->unsignedBigInteger('minisplit_mural_mantenimiento_id')->nullable();

            $table->foreign('piezas_minisplit_mural_id')->references('id')->on('piezas_minisplit_murals')->onDelete('set null');
            $table->foreign('minisplit_mural_mantenimiento_id')->references('id')->on('minisplit_mural_mantenimientos')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambios_piezas');
    }
};

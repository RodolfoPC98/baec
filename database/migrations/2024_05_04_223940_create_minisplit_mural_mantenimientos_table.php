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
        Schema::create('minisplit_mural_mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->string('comentarios', 255)->nullable();

            $table->unsignedBigInteger('bien_id')->nullable();
            $table->unsignedBigInteger('trabajos_realizado_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('bien_id')->references('id')->on('biens')->onDelete('set null');
            $table->foreign('trabajos_realizado_id')->references('id')->on('trabajos_realizados')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minisplit_mural_mantenimientos');
    }
};

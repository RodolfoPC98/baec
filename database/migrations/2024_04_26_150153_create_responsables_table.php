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
        Schema::create('responsables', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->string('apellidos', 45);
            $table->float('numero_telefono')->nullable();
            $table->string('correo', 45)->nullable();
            
            $table->unsignedBigInteger('ubicacion_id')->nullable();

            $table->foreign('ubicacion_id')->references('id')->on('ubicacions')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsables');
    }
};

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
        Schema::create('bienes_inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('calle', 45);
            $table->integer('numero')->nullable();
            $table->string('colonia', 45);
            $table->string('localidad', 45);
            $table->string('entidad_federativa', 45);
            $table->string('telefono', 45)->nullable();
            $table->string('predio', 45);
            $table->string('edificio', 45);
            $table->string('unidad_administrativa', 45);
            $table->double('monto_historico');
            
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bienes_inmuebles');
    }
};

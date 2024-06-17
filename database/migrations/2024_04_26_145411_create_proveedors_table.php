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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('contacto_nombre_completo', 45)->nullable();
            $table->string('contacto_cp', 45)->nullable();
            $table->string('contacto_correo', 45)->nullable();
            $table->string('contacto_telefono', 45)->nullable();
            $table->string('nombre', 45)->nullable();
            $table->string('ubicacion', 45)->nullable();
            $table->string('n_identificacion', 45)->nullable();
            $table->string('tipo_negocio', 45)->nullable();
            $table->string('rfc', 45)->nullable();
            $table->string('correo', 45)->nullable();
            $table->string('telefono', 45)->nullable();
            $table->string('padron', 45)->nullable();
            $table->string('razon_social', 45)->nullable();
            $table->string('apoderado_legal', 45)->nullable();
            $table->string('giro', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};

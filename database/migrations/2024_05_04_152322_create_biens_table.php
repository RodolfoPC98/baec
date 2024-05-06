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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_bien', 45);
            $table->float('costo_producto')->nullable();
            $table->string('n_inventario', 45);
            $table->text('comentario')->nullable();
            $table->string('factura', 45)->nullable();
            $table->timestamp('fecha_factura')->nullable();

            $table->unsignedBigInteger('proveedor_id')->nullable();
            $table->unsignedBigInteger('ubicacion_id')->nullable();
            $table->unsignedBigInteger('modelo_id')->nullable();
            $table->unsignedBigInteger('responsable_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->unsignedBigInteger('tipo_bien_id')->nullable();
            $table->unsignedBigInteger('descripcion_bien_id')->nullable();

            $table->foreign('proveedor_id')->references('id')->on('proveedors')->onDelete('set null');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions')->onDelete('set null');
            $table->foreign('modelo_id')->references('id')->on('modelos')->onDelete('set null');
            $table->foreign('responsable_id')->references('id')->on('responsables')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('set null');
            $table->foreign('tipo_bien_id')->references('id')->on('tipo_biens')->onDelete('set null');
            $table->foreign('descripcion_bien_id')->references('id')->on('descripcion_biens')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};

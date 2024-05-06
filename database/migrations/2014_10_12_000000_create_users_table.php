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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', 45)->unique();
            $table->string('nombre', 45);
            $table->string('apellidos', 45);
            $table->tinyInteger('estado', 1);
            $table->string('correo')->nullable();
            $table->float('telefono')->nullable();
            $table->string('avatar', 45)->nullable();
            $table->string('tipo_usuario', 1);
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
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
        Schema::create('ubicacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->string('edificio', 45);
            // $table->unsignedBigInteger('edificio_id')->nullable();

            // $table->foreign('edificio_id')->references('id')->on('edificios')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubicacions');
    }
};

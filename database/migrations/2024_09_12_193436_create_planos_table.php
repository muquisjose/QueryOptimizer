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
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->char('lado', 5);
            $table->char('bloque', 6)->default('');
            $table->integer('cama');
            $table->unsignedBigInteger('id_flor');
            $table->foreign('id_flor')->references('id')->on('variedades');
            $table->integer('sector')->default(0);
            $table->unsignedBigInteger('id_cultivador');
            $table->foreign('id_cultivador')->references('id')->on('cultivadores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planos');
    }
};

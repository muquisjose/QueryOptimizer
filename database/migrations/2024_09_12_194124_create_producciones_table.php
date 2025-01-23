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
        Schema::create('producciones', function (Blueprint $table) {
            $table->id();
            $table->char('lado', 5);
            $table->char('bloque', 6)->default('');
            $table->integer('cama');
            $table->unsignedBigInteger('id_flor');
            $table->foreign('id_flor')->references('id')->on('variedades');
            $table->integer('plantas')->default(0);
            $table->string('motivo')->nullable()->default('');
            $table->integer('est_id')->default(5);
            $table->double('supercifie')->default(0.0);
            $table->integer('sembrado')->default(0);
            $table->integer('ciclo')->default(0);
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
        Schema::dropIfExists('producciones');
    }
};

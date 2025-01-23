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
        Schema::create('flores', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 5);
            $table->string('variedad', 50);
            $table->string('color', 20);
            $table->boolean('activa', 1)->nullable();
            $table->boolean('novedad', 1)->nullable();
            $table->string('descripcion', 50)->nullable();
            $table->integer('tallos_malla');
            $table->integer('ciclo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flores');
    }
};

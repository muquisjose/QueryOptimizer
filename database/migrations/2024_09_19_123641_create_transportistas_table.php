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
        Schema::create('transportistas', function (Blueprint $table) {
            $table->id();
            $table->char('nombre', 50);
            $table->char('identificacion', 13);
            $table->char('telefono', 20);
            $table->char('activo', 1)->default('1');
            $table->integer('orden')->default(99);
            $table->integer('tipo_identificacion')->nullable();
            $table->char('placa', 8)->default('PAA-1234')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportistas');
    }
};

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
        Schema::create('precios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->unsignedBigInteger('id_variedad');
            $table->foreign('id_variedad')->references('id')->on('variedades');
            $table->string('cod_varie', 7)->default('');
            $table->double('alta')->default('0');
            $table->double('normal')->default('0');
            $table->double('baja')->default('0');
            $table->integer('categoria')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('precios');
    }
};

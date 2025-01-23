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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->char('razon_social', 100);
            $table->char('nombre_comercial', 100);
            $table->integer('id_ciudad')->default(0);
            $table->char('ruc', 13);
            $table->char('telefono1', 45);
            $table->char('telefono2', 45);
            $table->char('email_ventas', 45);
            $table->char('email_finca', 45);
            $table->char('email_reportes', 45);
            $table->char('web', 45);
            $table->char('codigo', 5);
            $table->tinyInteger('activo')->default(1);
            $table->char('letra', 1);
            $table->char('logotipo', 100);
            $table->string('modulos', 100);
            $table->char('contribuyente_especial', 5);
            $table->tinyInteger('obligado_contabilidad')->default(1);
            $table->char('direccion_matriz', 200);
            $table->char('direccion_establecimiento', 200);
            $table->char('codigo_establecimiento', 3);
            $table->char('codigo_pto_emision', 3);
            $table->char('agente', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};

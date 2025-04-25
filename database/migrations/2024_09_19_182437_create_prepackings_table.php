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
        Schema::create('prepackings', function (Blueprint $table) {
            $table->id();
            $table->integer('orden')->default(0)->nullable();
            $table->integer('packing')->default(0)->nullable();
            $table->char('cod_client', 6)->default('');
            $table->integer('marca_id')->default(0)->nullable('');
            $table->char('marca', 25)->default('');
            $table->char('variedad', 50)->default('');
            $table->integer('longitud')->default(0)->nullable('');
            $table->char('diametro', 30)->default('')->nullable();
            $table->char('reclasifica', 4)->default('')->nullable();
            $table->integer('bunches')->default(0);
            $table->unsignedBigInteger('id_bodega');
            $table->foreign('id_bodega')->references('id')->on('bodegas');
            $table->char('bodega', 30)->default('')->nullable();
            $table->integer('botones')->default(0)->default(0);
            $table->integer('caja')->default(0)->nullable();
            $table->char('estado', 1);
            $table->integer('pendiente')->default(1)->nullable();
            $table->date('fecha_corte');
            $table->char('carguera', 30)->default('')->nullable();
            $table->date('fecha_pedido')->useCurrent();
            $table->date('salida_finca')->useCurrent();
            $table->date('salida_vuelo')->useCurrent();
            $table->char('transporte', 30)->default('')->nullable();
            $table->char('salida', 30)->default('')->nullable();
            $table->char('pais', 30)->default('')->nullable();
            $table->integer('capuchon')->default(0)->nullable();
            $table->char('observacion')->nullable();
            $table->char('guia_aerea', 50)->default('')->nullable();
            $table->char('fue', 30)->default('')->nullable();
            $table->char('camion', 30)->default('')->nullable();
            $table->char('cuarto_frio', 30)->default('')->nullable();
            $table->integer('remision')->nullable();
            $table->integer('adicional')->default(0)->nullable();
            $table->char('referencial', 30)->default('')->nullable();
            $table->integer('mostrar')->default(1)->nullable();
            $table->integer('revisar_finca')->default(0)->nullable();
            $table->integer('parcial')->default(0)->nullable();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->char('tipo_precio', 4)->default('A')->nullable();
            $table->char('tipo_venta', 10)->default('VSO');
            $table->char('tipo_caja', 10)->default('HB');
            $table->integer('of_id')->nullable();
            $table->integer('long_hasta')->default(0);
            $table->char('comentario', 50)->nullable();
            $table->unsignedBigInteger('id_transportista');
            $table->foreign('id_transportista')->references('id')->on('transportistas');
            $table->char('autorizacion', 49)->nullable();
            $table->char('facturacion', 30)->nullable();
            $table->char('empaque', 10)->nullable();
            $table->char('impreso', 1)->default()->nullable();
            $table->char('etiqueta', 3)->default()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prepackings');
    }
};

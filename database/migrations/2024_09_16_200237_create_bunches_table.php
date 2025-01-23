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
        Schema::create('bunches', function (Blueprint $table) {
            $table->id();
            $table->string('num_bunch', 7)->default('');
            $table->string('cod_varie', 7);
            $table->unsignedBigInteger('id_flor');
            $table->foreign('id_flor')->references('id')->on('flores');
            $table->integer('num_tallos');
            $table->unsignedBigInteger('id_bodega');
            $table->foreign('id_bodega')->references('id')->on('bodegas');
            $table->date('fecha')->nullable();
            $table->string('observa')->nullable();
            $table->integer('num_pack')->default(0)->nullable();
            $table->string('cod_client', 6)->default('')->nullable();
            $table->char('estado', 3)->default('')->nullable();
            $table->integer('caja')->default(0)->nullable();
            $table->string('subcliente')->default('')->nullable();
            $table->float('precio')->default(0)->nullable();
            $table->char('transformado', 3)->default('NO');
            $table->date('fecha_embarque')->nullable();
            $table->string('PC', 4)->default('')->nullable();
            $table->string('categoria', 50)->nullable();
            $table->string('storder', 8)->default(0)->nullable();
            $table->char('nacional', 3)->nullable();
            $table->unsignedBigInteger('id_caja');
            $table->foreign('id_caja')->references('id')->on('tipo_cajas');
            $table->float('precio_tr')->default(0)->nullable();
            $table->unsignedBigInteger('id_prepara');
            $table->foreign('id_prepara')->references('id')->on('preparas');
            $table->char('finca', 3)->default(0)->nullable();
            $table->char('empaque', 3)->default('')->nullable();
            $table->date('fecha_baja')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bunches');
    }
};

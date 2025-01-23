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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 4)->default('');
            $table->string('nombre', 30)->nullable();
            $table->string('direccion', 60)->nullable();
            $table->string('telefono1', 15)->nullable();
            $table->string('telefono2', 15)->nullable();
            $table->string('contacto', 20)->nullable();
            $table->string('observa')->nullable();
            $table->char('prove_aduana', 4);
            $table->char('cuarto_frio', 30)->nullable();
            $table->char('pagina_web', 100)->nullable();
            $table->char('identificacion', 13)->default(9999999999001);
            $table->tinyInteger('tipo_identificacion')->default(1);
            $table->char('razon_social', 30)->nullable();
            $table->char('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};

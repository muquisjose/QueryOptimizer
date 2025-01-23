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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->char('nombre', 50);
            $table->char('zona', 30)->nullable();
            $table->char('localiza', 50);
            $table->char('telefono1', 25);
            $table->char('direccion', 50);
            $table->char('email');
            $table->char('contacto', 45);
            $table->char('email_contacto');
            $table->char('id_prove', 4)->default('PRE');
            $table->char('marcar', 30);
            $table->integer('numerar')->default('1');
            $table->char('tipo_caja', 30);
            $table->char('categoria', 1);
            $table->char('tar', 5);
            $table->integer('precio_referencial_alta')->default(0);
            $table->integer('precio_referencial_baja')->default(0);
            $table->integer('precio_referencial_especial')->default(0);
            $table->double('credito')->default(30)->default(30);
            $table->char('alfa_client', 13)->default('');
            $table->char('consigna', 50)->default('');
            $table->char('activo', 1)->default('1');
            $table->integer('id_usu')->default(0);
            $table->integer('moroso')->default(0);
            $table->integer('dia_pago_1')->nullable();
            $table->integer('dia_pago_2')->nullable();
            $table->integer('dia_pago_3')->nullable();
            $table->char('email_cartera')->nullable();
            $table->char('mobil_p', 30)->nullable();
            $table->char('chat_p', 30)->nullable();
            $table->char('compras1', 50)->nullable();
            $table->char('telefono_c1', 30)->nullable();
            $table->char('mobil_c1', 30)->nullable();
            $table->char('email_c1', 100)->nullable();
            $table->char('chat_c1', 30)->nullable();
            $table->char('compras2', 50)->nullable();
            $table->char('telefono_c2', 30)->nullable();
            $table->char('mobil_c2', 30)->nullable();
            $table->char('email_c2', 100)->nullable();
            $table->char('chat_c2', 30)->nullable();
            $table->char('compras3', 50)->nullable();
            $table->char('telefono_c3', 30)->nullable();
            $table->char('mobil_c3', 30)->nullable();
            $table->char('email_c3', 100)->nullable();
            $table->char('chat_c3', 30)->nullable();
            $table->char('compras4', 50)->nullable();
            $table->char('telefono_c4', 30)->nullable();
            $table->char('mobil_c4', 30)->nullable();
            $table->char('email_c4', 100)->nullable();
            $table->char('chat_c4', 30)->nullable();
            $table->char('pagos', 50)->nullable();
            $table->char('telefono_pg', 30)->nullable();
            $table->char('mobil_pg', 30)->nullable();
            $table->char('email_pg', 100)->nullable();
            $table->char('chat_pg', 30)->nullable();
            $table->char('direccion_pg', 100)->nullable();
            $table->char('referencia_com1', 50)->nullable();
            $table->char('referencia_com2', 50)->nullable();
            $table->char('referencia_com3', 50)->nullable();
            $table->date('fecha_act')->nullable();
            $table->text('notas')->nullable();
            $table->integer('tipo_identificacion_id')->default(3);
            $table->char('identificacion', 13)->nullable();
            $table->integer('tipo_cliente_id')->default(1);
            $table->char('notificar', 50);
            $table->char('formapago', 50);
            $table->char('matriz_destino', 15);
            $table->char('fechapago', 15);
            $table->integer('temporada')->default(0);
            $table->char('comentario', 50)->default('Comentario');
            $table->char('id_nif', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

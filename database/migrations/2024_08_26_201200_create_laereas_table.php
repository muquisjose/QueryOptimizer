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
        Schema::create('laereas', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 5)->nullable();
            $table->char('nombre', 30)->nullable();
            $table->char('aduana', 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laereas');
    }
};

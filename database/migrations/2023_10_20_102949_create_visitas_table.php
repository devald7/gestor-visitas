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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->string('documento', 255)->unique();
            $table->string('visitante', 255);
            $table->string('telefono', 15);
            $table->string('entidad_visitante', 255);
            $table->string('area_destino', 255);
            $table->string('motivo_visita', 255);
            $table->time('hora_ingreso');
            $table->time('hora_salida');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};

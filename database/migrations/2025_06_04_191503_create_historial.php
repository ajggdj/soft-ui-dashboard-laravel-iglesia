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
        Schema::create('historial', function (Blueprint $table) {
            $table->id();
            $table->integer('idinformacion');
            $table->longText('padecimiento_psico');
            $table->longText('medicamentos');
            $table->longText('enfermedad');
            $table->longText('embarazada');
            $table->longText('observaciones_discernimiento');
            $table->longText('observaciones_sacerdote');
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial');
    }
};

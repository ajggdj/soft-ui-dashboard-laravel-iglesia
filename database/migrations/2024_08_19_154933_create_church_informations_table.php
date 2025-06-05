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
        Schema::create('church_informations', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('domicilio');
            $table->string('fecha_nacimiento');
            $table->string('telefono');
            $table->string('edad');
            $table->boolean('bautizo');
            $table->boolean('confirmacion');
            $table->boolean('primera_comunion');
            $table->boolean('pareja');
            $table->boolean('casado_iglesia');
            $table->string('acude_misa');
            $table->string('comulga_misa');
            $table->string('ultima_confecion');
            $table->longText('padecimiento_psico');
            $table->longText('medicamentos');
            $table->longText('enfermedad');
            $table->longText('embarazada');
            $table->boolean('brujeria');
            $table->boolean('santeria');
            $table->boolean('adivinacion');
            $table->boolean('angeloterapia');
            $table->boolean('espiritimo');
            $table->boolean('curanderos');
            $table->boolean('reflexologia');
            $table->boolean('esoterismo');
            $table->boolean('reiki');
            $table->boolean('feng_shui');
            $table->boolean('yoga');
            $table->boolean('ouija');
            $table->boolean('magia');
            $table->boolean('muerte');
            $table->boolean('pendulo');
            $table->string('otro');
            $table->string('fecha_discernimiento');
            $table->longText('observaciones_discernimiento');
            $table->longText('observaciones_sacerdote');
            $table->integer('hijo')->nullable();
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('church_informations');
    }
};

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
        Schema::create('proyectos_ofertados', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_proyecto', ['individual', 'colectivo']);
            $table->enum('perfil', ['unidiciplinario', 'multidiciplinario']);
            $table->integer('duracion');
            $table->enum('estimulo', ['gratis', 'recompensado']);
            $table->enum('tipo_lug_part', ['comunitario', 'no comunitario']);
            $table->unsignedBigInteger('coordinador');
            $table->integer('aprobacionDG');
            $table->unsignedBigInteger('area');
            $table->string('denominacion', 80);
            $table->text('justificacion');
            $table->text('objetivos');
            $table->text('actividades');
            $table->text('alcances');
            $table->string('evaluacion', 100);
            $table->binary('convenioPDF');
            $table->enum('tipo_duracion', ['continuo', 'discontinuo']);
            $table->unsignedBigInteger('id_lugar_prestacion');
            $table->enum('estatus', ['activo', 'inactivo']);
            $table->timestamps();

            $table->foreign('coordinador')->references('id')->on('coordinador');
            $table->foreign('area')->references('id')->on('areas');
            $table->foreign('lugar_prestacion')->references('id')->on('id_lugar_prestacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos_ofertados');
    }
};

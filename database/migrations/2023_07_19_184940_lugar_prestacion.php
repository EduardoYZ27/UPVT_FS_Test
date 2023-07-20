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
        Schema::create('lugar_prestacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_lp', 100);
            $table->string('rfc', 13);
            $table->unsignedBigInteger('id_direccion');
            $table->enum('tipolp', ['Federeal', 'Estatal','Municipal']);
            $table->enum('sector', ['publico', 'privado']);
            $table->string('giro', 100);
            $table->enum('estatus', ['activo', 'inactivo']);
            $table->timestamps();

            //$table->foreign('id_direccion')->references('id')->on('id_direccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugar_prestacion');
    }
};

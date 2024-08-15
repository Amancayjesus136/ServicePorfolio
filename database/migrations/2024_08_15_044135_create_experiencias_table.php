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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id('id_experiencia');
            $table->string('exp_nombre_empresa');
            $table->string('exp_cargo_empresa');
            $table->string('exp_fecha_inicio');
            $table->string('exp_fecha_final');
            $table->text('exp_descripcion_cargo');
            $table->integer('exp_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencias');
    }
};

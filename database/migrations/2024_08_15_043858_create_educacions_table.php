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
        Schema::create('educacions', function (Blueprint $table) {
            $table->id('id_educacion');
            $table->string('edu_fecha_inicio');
            $table->string('edu_fecha_final');
            $table->string('edu_titulo');
            $table->string('edu_estado_educacion');
            $table->string('edu_nombre_educacion');
            $table->integer('edu_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educacions');
    }
};

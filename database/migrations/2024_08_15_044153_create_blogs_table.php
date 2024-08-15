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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('id_blog');
            $table->string('blo_imagen_blog');
            $table->string('blo_titulo_blog');
            $table->string('blo_categoria');
            $table->string('blo_autor_nombre');
            $table->string('blo_foto_autor');
            $table->string('blo_fecha_publicado');
            $table->text('blo_informacion');
            $table->integer('blo_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

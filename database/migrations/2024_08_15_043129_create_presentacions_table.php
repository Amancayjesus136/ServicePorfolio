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
        Schema::create('presentacions', function (Blueprint $table) {
            $table->id('id_presentacion');
            $table->string('pre_imagen');
            $table->string('pre_nombres');
            $table->string('pre_titulo');
            $table->text('pre_info');
            $table->text('pre_informacion');
            $table->integer('pre_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presentacions');
    }
};

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
        Schema::create('ficha_usuario_terapeuta', function (Blueprint $table) {
            $table->id();
            $table->json('objetivos_terapeuticos')->nullable();
            $table->longText('notas')->nullable();
            $table->integer('progreso')->default(0);
            // FK -> ficha_paciente_id
            $table->unsignedBigInteger('ficha_paciente_id');
            $table->foreign('ficha_paciente_id')->references('id')->on('ficha_usuario');
            // FK -> user_id
            $table->unsignedBigInteger('terapeuta_id');
            $table->foreign('terapeuta_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_usuario_taller');
    }
};

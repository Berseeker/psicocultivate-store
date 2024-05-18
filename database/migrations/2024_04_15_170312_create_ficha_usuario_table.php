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
        Schema::create('ficha_usuario', function (Blueprint $table) {
            $table->id();
            $table->longText('como_me_conociste')->nullable();
            $table->longText('motivo_x_consulta')->nullable();
            $table->longText('objetivo_x_terapia')->nullable();
            $table->longText('notas')->nullable();
            // FK -> paciente_id
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_usuario');
    }
};

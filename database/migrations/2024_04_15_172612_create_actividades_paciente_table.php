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
        Schema::create('actividades_paciente', function (Blueprint $table) {
            $table->id();
            // FK -> actividad_id
            $table->unsignedBigInteger('actividad_id');
            $table->foreign('actividad_id')->references('id')->on('actividades');
            $table->date('actividad_enviada')->default(now());
            $table->string('email')->nullable();
            $table->json('archivos')->nullable();
            $table->string('rate')->default(0); //Vamos a hacer que el paciente diga que tanto le gusto la actividad
            $table->json('respuestas'); // En caso de que las actividades tengan inputs, aqui se guadaran
            $table->boolean('actividad_terminada')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades_paciente');
    }
};

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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->json('label'); //A que esta destinada la actividad [terapia,amor propio, etc]
            $table->string('short_desc'); //Pequeña descripcion de la actividad
            $table->date('termino_x_actividad')->default(now()); //Cuando se cierra la actividad, dependiendo de la fecha
            $table->json('archivos')->nullable()->default(null);
            $table->longText('descripcion')->nullable()->default(null);
            $table->longText('caratula')->nullable(); //Img representativa de la actividad
            // FK -> ficha_paciente_id
            $table->unsignedBigInteger('ficha_paciente_id');
            $table->foreign('ficha_paciente_id')->references('id')->on('ficha_usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};

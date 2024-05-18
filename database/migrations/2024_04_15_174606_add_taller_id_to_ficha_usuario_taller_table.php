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
        Schema::table('ficha_usuario_taller', function (Blueprint $table) {
            // FK -> taller_id
            $table->unsignedBigInteger('taller_id');
            $table->foreign('taller_id')->references('id')->on('talleres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ficha_usuario_taller', function (Blueprint $table) {
            $table->dropForeign('taller_id');
        });
    }
};

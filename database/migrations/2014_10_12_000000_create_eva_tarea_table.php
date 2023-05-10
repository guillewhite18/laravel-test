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
        Schema::create('eva_tarea', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tareaFechaCreacion')->nullable();;
            $table->timestamp('tareaFechaLimite')->nullable();;
            $table->string('tareaDescripcion');
            $table->string('tareaEstado');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eva_tarea');
    }
};

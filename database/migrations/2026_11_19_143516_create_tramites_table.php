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
    Schema::create('tramites', function (Blueprint $table) {
        $table->id();
        $table->string('codigo_expediente')->unique();
        $table->foreignId('cliente_id')->constrained('clientes')->cascadeOnDelete();
        $table->string('tipo_tramite');
        $table->string('asunto');
        $table->integer('folios')->default(1);
        $table->string('archivo_adjunto')->nullable();
        $table->string('estado')->default('pendiente');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramites');
    }
};

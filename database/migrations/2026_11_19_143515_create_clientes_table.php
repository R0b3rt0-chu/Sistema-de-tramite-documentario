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
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('tipo_documento', 20);
        $table->string('numero_documento', 20)->unique();
        $table->string('nombres');
        $table->string('apellidos');
        $table->string('telefono', 20)->nullable();
        $table->string('email')->nullable();
        $table->string('especialidad')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

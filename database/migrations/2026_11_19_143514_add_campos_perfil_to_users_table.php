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
    Schema::table('users', function (Blueprint $table) {
        $table->string('telefono', 20)->nullable()->after('email');
        $table->string('rol')->default('administrativo')->after('password');
        $table->foreignId('oficina_id')->nullable()->after('rol')->constrained('oficinas')->nullOnDelete();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['oficina_id']);
        $table->dropColumn(['telefono', 'rol', 'oficina_id']);
    });
    }
};

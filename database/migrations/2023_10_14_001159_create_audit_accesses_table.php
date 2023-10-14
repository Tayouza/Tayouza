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
        Schema::create('audit_accesses', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('browser');
            $table->string('user_agent');
            $table->date('access_at');
            $table->json('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_accesses');
    }
};

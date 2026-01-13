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
        Schema::create('landing_info', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi_header');
            $table->json('skill_header');
            $table->string('CV');
            $table->string('deskripsi_tentang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing');
    }
};

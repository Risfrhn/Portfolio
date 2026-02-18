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
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_sertifikat', 50)->unique()->nullable();
            $table->string('judul', 150)->nullable();
            $table->string('nama_institusi', 100)->nullable();
            $table->date('tanggal_terbit')->nullable();
            $table->date('tanggal_berlaku')->nullable();
            $table->string('gambar_sertifikat', 255)->nullable();
            $table->string('file_sertifikat', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikat');
    }
};

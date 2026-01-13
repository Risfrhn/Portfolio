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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('logo_projek')->nullable();
            $table->string('gambar_flyer')->nullable();
            $table->json('gambar')->nullable();
            $table->string('nama_projek')->nullable();
            $table->string('perusahaan')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_akhir')->nullable();
            $table->enum('posisi', ['Fullstack', 'Backend', 'Frontend', 'System analyst'])->nullable();
            $table->string('deskripsi_projek')->nullable();
            $table->enum('tipe_projek', ['portfolio', 'product'])->nullable();
            $table->enum('kategori', ['Website', 'App mobile', 'UI/UX Design', 'App dekstop', 'Documentation'])->nullable();
            $table->json('alat')->nullable();
            $table->string('fitur')->nullable();
            $table->decimal('harga', 15, 2)->nullable();
            $table->string('link_website')->nullable();
            $table->string('link_app')->nullable();
            $table->string('link_github')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};

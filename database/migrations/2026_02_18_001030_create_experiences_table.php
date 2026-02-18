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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->enum('posisi', ['Backend Developer', 'Frontend Developer', 'Fullstack Developer', 'Mobile Developer', 'UI/UX Designer', 'System Analyst', 'DevOps Engineer', 'Project Manager', 'Other']);
            $table->enum('tipe_pekerjaan', ['Full-time', 'Part-time', 'Freelance', 'Contract', 'Internship']);
            $table->string('perusahaan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir')->nullable();
            $table->text('deskripsi');
            $table->text('pencapaian')->nullable();
            $table->json('teknologi')->nullable();
            $table->string('logo')->nullable();
            $table->string('flyer')->nullable();
            $table->longText('gambar')->nullable();
            $table->string('link_app')->nullable();
            $table->string('link_website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};

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
        Schema::create('about_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Judul hero
            $table->string('subtitle')->nullable(); // Subtitle hero
            $table->text('description')->nullable(); // Deskripsi hero
            $table->string('founded_year')->default('2020'); // Tahun berdiri
            $table->string('active_users')->default('100K+'); // Pengguna aktif
            $table->string('materials')->default('500+'); // Materi edukasi
            $table->string('free_access')->default('100%'); // Gratis akses
            $table->text('story_title')->nullable(); // Judul sebuah perjalanan
            $table->longText('story_content')->nullable(); // Isi cerita
            $table->string('mission')->nullable(); // Misi
            $table->string('vision')->nullable(); // Visi
            $table->string('value1_title')->default('Integritas');
            $table->text('value1_desc')->nullable();
            $table->string('value2_title')->default('Sederhana');
            $table->text('value2_desc')->nullable();
            $table->string('value3_title')->default('Inklusif');
            $table->text('value3_desc')->nullable();
            $table->text('testimonial_text')->nullable(); // Quote dari founder
            $table->string('founder_name')->default('Budi Santoso, CFA');
            $table->string('founder_position')->default('Founder & CEO Maneki');
            $table->string('founder_linkedin')->nullable();
            $table->string('founder_twitter')->nullable();
            $table->string('collaboration_title')->default('Ingin Berkolaborasi?');
            $table->text('collaboration_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_contents');
    }
};

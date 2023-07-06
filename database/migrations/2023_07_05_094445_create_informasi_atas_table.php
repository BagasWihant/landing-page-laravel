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
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_website')->nullable();
            $table->string('title')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->string('logo_web')->nullable();
            $table->text('maps')->nullable();
            $table->text('about_us')->nullable();
            $table->text('back_color_atas')->nullable();
            $table->text('font_color_atas')->nullable();
            $table->text('back_color_foot')->nullable();
            $table->text('font_color_foot')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi');
    }
};

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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // judul
            $table->string('slug')->unique(); // untuk URL
            $table->text('excerpt')->nullable(); // ringkasan
            $table->text('content'); // isi berita
            $table->string('image')->nullable(); // gambar
            $table->boolean('is_active')->default(true); // status tampil
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};

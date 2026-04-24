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
        Schema::create('sustainability_commitments', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // "Komitmen Keberlanjutan"
            $table->string('subtitle'); // "Bertumbuh dengan tanggung jawab"
            $table->text('description'); // Main description paragraph
            $table->string('image_url')->nullable(); // Image for the right side
            $table->string('button_text')->default('Kolaborasi Bersama Kami');
            $table->string('button_url')->default('/hubungi');
            $table->json('points'); // Array of bullet points
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sustainability_commitments');
    }
};

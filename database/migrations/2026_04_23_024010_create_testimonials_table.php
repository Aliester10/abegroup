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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('position');
            $table->string('company');
            $table->text('testimonial_text');
            $table->unsignedTinyInteger('rating')->default(5); // Default bintang 5
            $table->string('profile_image')->nullable(); // Menyimpan nama file/path logo
            $table->boolean('is_visible')->default(true); // Untuk kontrol tampil/tidak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};

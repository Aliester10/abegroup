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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category'); // Sesuai kebutuhan halaman detail
            $table->string('slug')->unique(); // Untuk URL ramah SEO (pt-aro-baskara-esa)
            $table->string('image'); // Gunakan satu istilah saja (image atau logo)
            $table->string('website_link')->nullable();
            $table->string('ecomerce_link')->nullable();
            $table->text('description');

            // Tambahan untuk mengakomodasi kebutuhan fitur 'Home'
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business');
    }
};

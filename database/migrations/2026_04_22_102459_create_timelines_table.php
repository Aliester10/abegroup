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
        Schema::create('timelines', function (Blueprint $table) {
            $table->id();
            $table->string('year', 4);
            $table->string('title');
            $table->text('description');
            $table->string('label', 50)->nullable(); // THE BEGINNING, GROWTH PHASE, etc.
            $table->string('position'); // left or right
            $table->string('theme'); // blue or orange
            $table->json('tags')->nullable(); // ["Startup", "Vision"]
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
        Schema::dropIfExists('timelines');
    }
};

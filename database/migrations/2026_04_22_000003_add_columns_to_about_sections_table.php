<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {
            if (!Schema::hasColumn('about_sections', 'title')) {
                $table->string('title')->after('id');
            }
            if (!Schema::hasColumn('about_sections', 'subtitle')) {
                $table->string('subtitle')->nullable()->after('title');
            }
            if (!Schema::hasColumn('about_sections', 'content')) {
                $table->longText('content')->nullable()->after('subtitle');
            }
            if (!Schema::hasColumn('about_sections', 'image')) {
                $table->string('image')->nullable()->after('content');
            }
            if (!Schema::hasColumn('about_sections', 'is_active')) {
                $table->boolean('is_active')->default(true)->after('image');
            }
            if (!Schema::hasColumn('about_sections', 'order')) {
                $table->integer('order')->default(0)->after('is_active');
            }
        });
    }

    public function down(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {
            $columns = ['title', 'subtitle', 'content', 'image', 'is_active', 'order'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('about_sections', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};

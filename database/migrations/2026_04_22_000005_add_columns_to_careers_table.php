<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('careers', function (Blueprint $table) {
            if (!Schema::hasColumn('careers', 'title')) {
                $table->string('title')->after('id');
            }
            if (!Schema::hasColumn('careers', 'description')) {
                $table->longText('description')->nullable()->after('title');
            }
            if (!Schema::hasColumn('careers', 'location')) {
                $table->string('location')->nullable()->after('description');
            }
            if (!Schema::hasColumn('careers', 'type')) {
                $table->string('type')->nullable()->after('location');
            }
            if (!Schema::hasColumn('careers', 'apply_url')) {
                $table->string('apply_url')->nullable()->after('type');
            }
            if (!Schema::hasColumn('careers', 'is_active')) {
                $table->boolean('is_active')->default(true)->after('apply_url');
            }
            if (!Schema::hasColumn('careers', 'order')) {
                $table->integer('order')->default(0)->after('is_active');
            }
        });
    }

    public function down(): void
    {
        Schema::table('careers', function (Blueprint $table) {
            $columns = ['title', 'description', 'location', 'type', 'apply_url', 'is_active', 'order'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('careers', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            if (!Schema::hasColumn('activities', 'title')) {
                $table->string('title')->after('id');
            }
            if (!Schema::hasColumn('activities', 'description')) {
                $table->text('description')->nullable()->after('title');
            }
            if (!Schema::hasColumn('activities', 'date')) {
                $table->date('date')->nullable()->after('description');
            }
            if (!Schema::hasColumn('activities', 'location')) {
                $table->string('location')->nullable()->after('date');
            }
            if (!Schema::hasColumn('activities', 'image')) {
                $table->string('image')->nullable()->after('location');
            }
            if (!Schema::hasColumn('activities', 'is_active')) {
                $table->boolean('is_active')->default(true)->after('image');
            }
        });
    }

    public function down(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            $columns = ['title', 'description', 'date', 'location', 'image', 'is_active'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('activities', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};

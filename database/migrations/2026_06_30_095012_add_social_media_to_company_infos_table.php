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
        Schema::table('company_infos', function (Blueprint $table) {
            $table->string('facebook')->nullable()->after('operational_hours');
            $table->string('instagram')->nullable()->after('facebook');
            $table->string('linkedin')->nullable()->after('instagram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_infos', function (Blueprint $table) {
            $table->dropColumn(['facebook', 'instagram', 'linkedin']);
        });
    }
};

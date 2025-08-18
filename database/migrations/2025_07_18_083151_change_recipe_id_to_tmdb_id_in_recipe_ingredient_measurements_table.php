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
        Schema::table('recipe_ingredient_measurements', function (Blueprint $table) {
            $table->dropColumn('recipe_id');
            $table->integer('tmdb_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipe_ingredient_measurements', function (Blueprint $table) {
            $table->dropColumn('tmdb_id');
            $table->integer('recipe_id')->after('id');
        });
    }
};

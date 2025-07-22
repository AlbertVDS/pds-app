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
        Schema::table('recipes', function (Blueprint $table) {
            $table->unique('tmdb_id');
        });

        Schema::table('recipe_instructions', function (Blueprint $table) {
            $table->unique('tmdb_id');
        });

        Schema::table('recipe_tag_pivot', function (Blueprint $table) {
            $table->unique(['tmdb_id', 'tag_id']);
        });

        Schema::table('recipe_ingredient_measurements', function (Blueprint $table) {
            $table->unique(['tmdb_id', 'ingredient_id', 'measurement_id'], 't_id_i_id_m_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropUnique('tmdb_id');
        });

        Schema::table('recipe_instructions', function (Blueprint $table) {
            $table->dropUnique('tmdb_id');
        });

        Schema::table('recipe_tag_pivot', function (Blueprint $table) {
            $table->dropUnique(['tmdb_id', 'tag_id']);
        });

        Schema::table('recipe_ingredient_measurements', function (Blueprint $table) {
            $table->dropUnique(['tmdb_id', 'ingredient_id', 'measurement_id']);
        });
    }
};

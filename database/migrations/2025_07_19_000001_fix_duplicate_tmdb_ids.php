<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Clean up duplicate tmdb_id values in recipe_instructions
        // Keep only the first occurrence of each tmdb_id, remove duplicates with NULL or 0
        DB::statement('
            DELETE FROM recipe_instructions
            WHERE id NOT IN (
                SELECT MIN(id)
                FROM (
                    SELECT MIN(id) as id
                    FROM recipe_instructions
                    WHERE tmdb_id IS NOT NULL AND tmdb_id != 0
                    GROUP BY tmdb_id
                ) as min_ids
            ) OR tmdb_id IS NULL OR tmdb_id = 0
        ');

        // Now add the unique constraint
        Schema::table('recipe_instructions', function (Blueprint $table) {
            $table->unique('tmdb_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipe_instructions', function (Blueprint $table) {
            $table->dropUnique(['tmdb_id']);
        });
    }
};

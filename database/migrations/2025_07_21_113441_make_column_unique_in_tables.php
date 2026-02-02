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
        // Clean up recipes table - keep first occurrence of each tmdb_id
        $this->cleanupDuplicates('recipes', 'tmdb_id');

        // Clean up recipe_instructions - duplicates should be cleaned by fix migration
        $this->cleanupDuplicates('recipe_instructions', 'tmdb_id');

        // Clean up recipe_tag_pivot
        $this->cleanupDuplicates('recipe_tag_pivot', ['tmdb_id', 'tag_id']);

        // Clean up recipe_ingredient_measurements
        $this->cleanupDuplicates('recipe_ingredient_measurements', ['tmdb_id', 'ingredient_id', 'measurement_id']);

        // Add unique constraints with proper error handling
        try {
            Schema::table('recipes', function (Blueprint $table) {
                $table->unique('tmdb_id');
            });
        } catch (\Exception $e) {
            // Constraint may already exist
        }

        try {
            Schema::table('recipe_instructions', function (Blueprint $table) {
                $table->unique('tmdb_id');
            });
        } catch (\Exception $e) {
            // Constraint may already exist
        }

        try {
            Schema::table('recipe_tag_pivot', function (Blueprint $table) {
                $table->unique(['tmdb_id', 'tag_id']);
            });
        } catch (\Exception $e) {
            // Constraint may already exist
        }

        try {
            Schema::table('recipe_ingredient_measurements', function (Blueprint $table) {
                $table->unique(['tmdb_id', 'ingredient_id', 'measurement_id'], 't_id_i_id_m_id_unique');
            });
        } catch (\Exception $e) {
            // Constraint may already exist
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipes', function (Blueprint $table) {
            if ($this->constraintExists('recipes', 'recipes_tmdb_id_unique')) {
                $table->dropUnique(['tmdb_id']);
            }
        });

        Schema::table('recipe_instructions', function (Blueprint $table) {
            if ($this->constraintExists('recipe_instructions', 'recipe_instructions_tmdb_id_unique')) {
                $table->dropUnique(['tmdb_id']);
            }
        });

        Schema::table('recipe_tag_pivot', function (Blueprint $table) {
            if ($this->constraintExists('recipe_tag_pivot', 'recipe_tag_pivot_tmdb_id_tag_id_unique')) {
                $table->dropUnique(['tmdb_id', 'tag_id']);
            }
        });

        Schema::table('recipe_ingredient_measurements', function (Blueprint $table) {
            if ($this->constraintExists('recipe_ingredient_measurements', 't_id_i_id_m_id_unique')) {
                $table->dropUnique(['tmdb_id', 'ingredient_id', 'measurement_id']);
            }
        });
    }

    /**
     * Clean up duplicate entries keeping only the first one
     */
    private function cleanupDuplicates(string $table, $columns): void
    {
        $columns = is_array($columns) ? $columns : [$columns];
        $columnList = implode(',', $columns);

        DB::statement("
            DELETE FROM $table
            WHERE id NOT IN (
                SELECT MIN(id)
                FROM (
                    SELECT MIN(id) as id
                    FROM $table
                    GROUP BY $columnList
                ) as min_ids
            )
        ");
    }
};

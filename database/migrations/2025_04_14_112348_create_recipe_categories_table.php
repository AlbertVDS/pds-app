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
        Schema::create('recipe_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->json('food_ids')->nullable();
            $table->timestamps();
        });

        DB::insert("INSERT INTO `recipe_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
            (1, 'Dessert', '2025-04-15 09:39:13', '2025-04-15 09:39:13'),
            (2, 'Chicken', '2025-04-15 09:39:13', '2025-04-15 09:39:13'),
            (3, 'Beef', '2025-04-15 09:39:13', '2025-04-15 09:39:13'),
            (4, 'Vegetarian', '2025-04-15 09:39:13', '2025-04-15 09:39:13'),
            (5, 'Starter', '2025-04-15 09:39:14', '2025-04-15 09:39:14'),
            (6, 'Miscellaneous', '2025-04-15 09:39:14', '2025-04-15 09:39:14'),
            (7, 'Side', '2025-04-15 09:39:14', '2025-04-15 09:39:14'),
            (8, 'Seafood', '2025-04-15 09:39:15', '2025-04-15 09:39:15'),
            (9, 'Breakfast', '2025-04-15 09:39:15', '2025-04-15 09:39:15'),
            (10, 'Pork', '2025-04-15 09:39:15', '2025-04-15 09:39:15'),
            (11, 'Pasta', '2025-04-15 09:39:17', '2025-04-15 09:39:17'),
            (12, 'Lamb', '2025-04-15 09:39:23', '2025-04-15 09:39:23'),
            (13, 'Goat', '2025-04-15 09:39:26', '2025-04-15 09:39:26'),
            (14, 'Vegan', '2025-04-15 09:39:29', '2025-04-15 09:39:29');
            ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_categories');
    }
};

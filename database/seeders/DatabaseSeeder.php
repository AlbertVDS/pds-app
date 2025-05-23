<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FoodSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FoodSubstitutesTableSeeder::class);
        $this->call(FoodTypesTableSeeder::class);
        $this->call(FoodsTableSeeder::class);
        $this->call(RecipeAreasTableSeeder::class);
        $this->call(RecipeCategoriesTableSeeder::class);
        $this->call(RecipeIngredientsTableSeeder::class);
        $this->call(RecipeMeasurementsTableSeeder::class);
        $this->call(RecipeTagsTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LanguagesTableSeeder::class);
    }
}

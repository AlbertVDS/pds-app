<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipeCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_categories')->delete();
        
        \DB::table('recipe_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dessert',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Chicken',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Beef',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Vegetarian',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Starter',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Miscellaneous',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Side',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Seafood',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Breakfast',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Pork',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Pasta',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Lamb',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Goat',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Vegan',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
        ));
        
        
    }
}
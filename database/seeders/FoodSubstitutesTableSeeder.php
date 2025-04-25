<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FoodSubstitutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('food_substitutes')->delete();
        
        \DB::table('food_substitutes')->insert(array (
            0 => 
            array (
                'id' => 5,
                'food_id' => 19,
                'substitute_id' => 7,
                'created_at' => '2025-04-22 08:10:13',
                'updated_at' => '2025-04-22 08:10:13',
            ),
            1 => 
            array (
                'id' => 6,
                'food_id' => 19,
                'substitute_id' => 12,
                'created_at' => '2025-04-22 08:10:14',
                'updated_at' => '2025-04-22 08:10:14',
            ),
            2 => 
            array (
                'id' => 7,
                'food_id' => 19,
                'substitute_id' => 24,
                'created_at' => '2025-04-22 08:10:16',
                'updated_at' => '2025-04-22 08:10:16',
            ),
            3 => 
            array (
                'id' => 8,
                'food_id' => 19,
                'substitute_id' => 14,
                'created_at' => '2025-04-22 08:10:17',
                'updated_at' => '2025-04-22 08:10:17',
            ),
            4 => 
            array (
                'id' => 9,
                'food_id' => 19,
                'substitute_id' => 4,
                'created_at' => '2025-04-22 08:10:18',
                'updated_at' => '2025-04-22 08:10:18',
            ),
            5 => 
            array (
                'id' => 10,
                'food_id' => 19,
                'substitute_id' => 30,
                'created_at' => '2025-04-22 08:10:19',
                'updated_at' => '2025-04-22 08:10:19',
            ),
            6 => 
            array (
                'id' => 11,
                'food_id' => 19,
                'substitute_id' => 3,
                'created_at' => '2025-04-22 08:10:20',
                'updated_at' => '2025-04-22 08:10:20',
            ),
            7 => 
            array (
                'id' => 12,
                'food_id' => 19,
                'substitute_id' => 2,
                'created_at' => '2025-04-22 08:11:29',
                'updated_at' => '2025-04-22 08:11:29',
            ),
            8 => 
            array (
                'id' => 13,
                'food_id' => 19,
                'substitute_id' => 25,
                'created_at' => '2025-04-22 08:11:37',
                'updated_at' => '2025-04-22 08:11:37',
            ),
            9 => 
            array (
                'id' => 22,
                'food_id' => 1,
                'substitute_id' => 36,
                'created_at' => '2025-04-22 11:21:38',
                'updated_at' => '2025-04-22 11:21:38',
            ),
            10 => 
            array (
                'id' => 24,
                'food_id' => 1,
                'substitute_id' => 37,
                'created_at' => '2025-04-22 11:40:22',
                'updated_at' => '2025-04-22 11:40:22',
            ),
        ));
        
        
    }
}
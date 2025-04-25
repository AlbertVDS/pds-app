<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipeAreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_areas')->delete();
        
        \DB::table('recipe_areas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'British',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Malaysian',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Indian',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'American',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Mexican',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Russian',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'French',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Canadian',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Jamaican',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Chinese',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Italian',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Dutch',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Vietnamese',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Polish',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Irish',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Croatian',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Filipino',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Ukrainian',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Japanese',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Moroccan',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Tunisian',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Turkish',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Greek',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Uruguayan',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Egyptian',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Portuguese',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Kenyan',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Thai',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Spanish',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
        ));
        
        
    }
}
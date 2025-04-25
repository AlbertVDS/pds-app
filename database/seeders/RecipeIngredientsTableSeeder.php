<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipeIngredientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_ingredients')->delete();
        
        \DB::table('recipe_ingredients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'digestive biscuits',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'butter',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bramley apples',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Salted Butter',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'caster sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'free-range eggs, beaten',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ground almonds',
                'food_ids' => '["141"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:43:04',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'almond extract',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-22 13:59:48',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'flaked almonds',
                'food_ids' => '["141"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Plain Flour',
                'food_ids' => '["404"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Braeburn Apples',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Demerara Sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Blackberries',
                'food_ids' => '["24"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:25:17',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Cinnamon',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Ice Cream',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Milk',
                'food_ids' => '["114","102","116","117"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:57:45',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Eggs',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Flour',
                'food_ids' => '["404","405"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Baking Powder',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Salt',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Unsalted Butter',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Peanut Butter',
                'food_ids' => '["136"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Chicken Thighs',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Challots',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Ginger',
                'food_ids' => '["245"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Garlic Clove',
                'food_ids' => '["260"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Cayenne Pepper',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Turmeric',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Cumin',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Coriander',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Fennel',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Tamarind Paste',
                'food_ids' => '["68"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 09:12:18',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Coconut Milk',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Water',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'chilled butter',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'cold water',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'raspberry jam',
                'food_ids' => '["67"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'free-range egg, beaten',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'bread',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'sultanas',
                'food_ids' => '["80"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'double cream',
                'food_ids' => '["108"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:36:07',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'nutmeg',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'mushrooms',
                'food_ids' => '["263","300","264","265","301"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:59:56',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'English Mustard',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Olive Oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Beef Fillet',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Parma ham',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Puff Pastry',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Egg Yolks',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Aubergine',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Onion',
                'food_ids' => '["267","269","299","266"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:59:56',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Tomatoes',
                'food_ids' => '["259"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 09:12:19',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Garlic',
                'food_ids' => '["260"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Green Chilli',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Red Chilli Powder',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Coriander Leaves',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Beef Brisket',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Thyme',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Rosemary',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Bay Leaves',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'beef stock',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Carrots',
                'food_ids' => '["203"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 08:29:13',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Mustard',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Potatoes',
                'food_ids' => '["253"]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Beef',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Broccoli',
                'food_ids' => '["222"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:25:18',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'sunflower oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Onions',
                'food_ids' => '["267","269","299","266"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:59:56',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Chorizo',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Allspice',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-22 13:59:48',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Cloves',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Cinnamon stick',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Oregano',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Ancho Chillies',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Balsamic Vinegar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Plum Tomatoes',
                'food_ids' => '["259"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Tomato Ketchup',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Dark Brown Sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Borlotti Beans',
                'food_ids' => '["169"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:25:17',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Creme Fraiche',
                'food_ids' => '["107"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Parsley',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Rapeseed Oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Celery',
                'food_ids' => '["230"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Leek',
                'food_ids' => '["273","262"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:57:45',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Vegetable Stock',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Stilton Cheese',
                'food_ids' => '["99"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Sausages',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Tomato Sauce',
                'food_ids' => '["259"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 09:12:19',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Butter Beans',
                'food_ids' => '["177"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:25:18',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Black Treacle',
                'food_ids' => '["196"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:25:17',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Banana',
                'food_ids' => '["1","36"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:18:09',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Vanilla Extract',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Pecan Nuts',
                'food_ids' => '["146"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Raspberries',
                'food_ids' => '["67"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Swede',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Red Wine',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Bay Leaf',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Suet',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Green Beans',
                'food_ids' => '["218"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:40:13',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Pepper',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Shallots',
                'food_ids' => '["266"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Bacon',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Stout',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Corn Flour',
                'food_ids' => '["406"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Oysters',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Hazlenuts',
                'food_ids' => '["144"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:43:04',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Lemon',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Lemon Juice',
                'food_ids' => '["15"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:57:45',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Yogurt',
                'food_ids' => '["101","103","119","120","121"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 09:13:47',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Mint',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Self-raising Flour',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Almonds',
                'food_ids' => '["141"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-22 13:48:08',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Pink Food Colouring',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Apricot',
                'food_ids' => '["23"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-22 13:51:38',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Marzipan',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Icing Sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Goose Fat',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Beef Shin',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Chestnut Mushroom',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Bouquet Garni',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Tomato Puree',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Celeriac',
                'food_ids' => '["204"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Cardamom',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Yeast',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Brie',
                'food_ids' => '["98"]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-24 08:25:18',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Prosciutto',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Chicken',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Tomato',
                'food_ids' => '["259"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 09:12:19',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Red Pepper',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Lime',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Soy Sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Cornstarch',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Vegetable Oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Sesame Seed Oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Egg',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Starch',
                'food_ids' => '["416","417","418","419"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Noodles',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Minced Garlic',
                'food_ids' => '["260"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 08:57:45',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Bean Sprouts',
                'food_ids' => '["200"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-22 13:54:06',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Oyster Sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Cherry Tomatoes',
                'food_ids' => '["284"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Salmon',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Black Olives',
                'food_ids' => '["295"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 08:25:17',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Ricotta',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Lemons',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Dark Rum',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Maple Syrup',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Breadcrumbs',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Red Onions',
                'food_ids' => '["267"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 09:05:25',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Pork',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Barbeque Sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Hotsauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Rice',
                'food_ids' => '["392"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 09:07:05',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Cucumber',
                'food_ids' => '["209"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Ground Beef',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Minced Beef',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Sesame Seed Burger Buns',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Iceberg Lettuce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Cheese',
                'food_ids' => '["99"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Dill Pickles',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Mayonnaise',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'White Wine Vinegar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Onion Salt',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Garlic Powder',
                'food_ids' => '["260"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Paprika',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Kielbasa',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Cabbage',
                'food_ids' => '["225","226","227"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 08:25:18',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Sauerkraut',
                'food_ids' => '["306"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 09:07:05',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Basil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Marjoram',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Caraway Seed',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Diced Tomatoes',
                'food_ids' => '["259"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 08:36:07',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Worcestershire Sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Spring Onions',
                'food_ids' => '["251","268"]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Egg White',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Bicarbonate Of Soda',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Star Anise',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Coconut Cream',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Filo Pastry',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Black Pepper',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Green Pepper',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Chilli Powder',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Beef Stock Concentrate',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Beetroot',
                'food_ids' => '["219"]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-24 08:18:09',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Chicken Stock Cube',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Cannellini Beans',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Dill',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Buckwheat',
                'food_ids' => '["384","400"]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-24 08:25:18',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Enchilada sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'shredded Monterey Jack cheese',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'corn tortillas',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'chicken breasts',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Plain chocolate',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Granulated Sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Parmesan Cheese',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'White Vinegar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Honey',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'dark soft brown sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'golden syrup',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'orange',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'rolled oats',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Christmas pudding',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Ginger paste',
                'food_ids' => '["245"]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-24 08:40:13',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Cumin seeds',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Coriander seeds',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Turmeric powder',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Cream',
                'food_ids' => '["108","100"]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'fenugreek',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Garam masala',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Squash',
                'food_ids' => '["224","257","282"]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'red pepper flakes',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'white wine',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'heavy cream',
                'food_ids' => '["108"]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-24 08:43:04',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'bowtie pasta',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'macaroni',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'chicken stock',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'fajita seasoning',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'chicken breast',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'cheddar cheese',
                'food_ids' => '["90"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'cajun',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'white fish',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'flour tortilla',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'avocado',
                'food_ids' => '["35"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-22 13:52:08',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'little gem lettuce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'salsa',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'sour cream',
                'food_ids' => '["107"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Vinaigrette Dressing',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Smoked Paprika',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Refried Beans',
                'food_ids' => '["166"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 09:07:05',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Hard Taco Shells',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Shredded Mexican Cheese',
                'food_ids' => '["99"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Grape Tomatoes',
                'food_ids' => '["259"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 08:40:13',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Jalapeno',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Green Salsa',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Sake',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Potato starch',
                'food_ids' => '["418"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Chicken Legs',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Brandy',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Linguine Pasta',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Sugar Snap Peas',
                'food_ids' => '["270"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Red Chilli',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'King Prawns',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Basil Leaves',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Lettuce',
                'food_ids' => '["248","247","249"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 08:57:45',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Fromage Frais',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Clams',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Chopped Tomatoes',
                'food_ids' => '["259"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Passata',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Vegetable Stock Cube',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Whole Milk',
                'food_ids' => '["114"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 09:13:47',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Mustard Powder',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Sweetcorn',
                'food_ids' => '["235"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 09:12:18',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Harissa Spice',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Dried Apricots',
                'food_ids' => '["70"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 08:36:07',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Chickpeas',
                'food_ids' => '["178"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'Couscous',
                'food_ids' => '["401"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Cacao',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Vanilla',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Sea Salt',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Cream Cheese',
                'food_ids' => '["105"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Light Brown Soft Sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Dark Brown Soft Sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Dark Chocolate Chips',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Dark Chocolate',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Milk Chocolate',
                'food_ids' => '["114","116","117","102"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 08:57:45',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Cocoa',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Red Wine Vinegar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Ham',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Tinned Tomatos',
                'food_ids' => '["304"]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-24 09:12:18',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Gruyere cheese',
                'food_ids' => '["99"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:43:04',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Walnuts',
                'food_ids' => '["155"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 09:13:46',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'White Flour',
                'food_ids' => '["404"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 09:13:46',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Brown Sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Dried Fruit',
                'food_ids' => '["69","70","82","84","83","72","73","74","75","77","78"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:36:07',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Single Cream',
                'food_ids' => '["100"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Red Wine Jelly',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Shortcrust Pastry',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Muscovado Sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Raisins',
                'food_ids' => '["88"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Sun-Dried Tomatoes',
                'food_ids' => '["305"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Basmati Rice',
                'food_ids' => '["390"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:18:09',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'Dry White Wine',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Kale',
                'food_ids' => '["246"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:43:05',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Ginger Cordial',
                'food_ids' => '["245"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Mars Bar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Rice Krispies',
                'food_ids' => '["383"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 09:07:05',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Chili Powder',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Cashew Nuts',
                'food_ids' => '["139"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:29:13',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Orange Blossom Water',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Lentils',
                'food_ids' => '["164","180","181"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:57:45',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Candied Peel',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Grand Marnier',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Custard',
                'food_ids' => '["109"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Mascarpone',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'Sherry',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Glace Cherry',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Currants',
                'food_ids' => '["85"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Mixed Spice',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Rose water',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Small Potatoes',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Italian Fennel Sausages',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Shiitake Mushrooms',
                'food_ids' => '["265","301"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'Quinoa',
                'food_ids' => '["387","388","389"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Feta',
                'food_ids' => '["93"]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-24 08:36:08',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Pickle Juice',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Celery Salt',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Pork Chops',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Cider',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Minced Pork',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'Courgettes',
                'food_ids' => '["236"]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Lamb Shoulder',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Garlic Sauce',
                'food_ids' => '["260"]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Mozzarella',
                'food_ids' => '["96"]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-24 08:59:56',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Egg Plants',
                'food_ids' => '["217"]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-24 08:36:07',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Sesame Seed',
                'food_ids' => '["153"]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Toor dal',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Ghee',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Mustard Seeds',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Cilantro',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Apricot Jam',
                'food_ids' => '["23"]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-24 08:18:09',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Duck Legs',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'strawberries',
                'food_ids' => '["52"]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'meringue nests',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Mixed Peel',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Black Pudding',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Red Snapper',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Yellow Pepper',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Scotch Bonnet',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Malt Vinegar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Peas',
                'food_ids' => '["271"]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Pita Bread',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Ground Pork',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Rice Vinegar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Floury Potatoes',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Semi-skimmed Milk',
                'food_ids' => '["116"]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'White Fish Fillets',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'Jerusalem Artichokes',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Prawns',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Gruyère',
                'food_ids' => '["99"]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-24 08:43:04',
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'French Lentils',
                'food_ids' => '["180"]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Clotted Cream',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Fettuccine',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Baked Beans',
                'food_ids' => '["166"]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-24 08:18:09',
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Lard',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Parmesan',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Tarragon Leaves',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Chives',
                'food_ids' => '["206"]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Fish Stock',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Mussels',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Broad Beans',
                'food_ids' => '["170"]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-24 08:25:18',
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Haddock',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Sardines',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Cod',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Raw king prawns',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Chopped onion',
                'food_ids' => '["267","269"]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Freshly chopped parsley',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Cubed Feta cheese',
                'food_ids' => '["93"]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-24 08:32:57',
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Kosher salt',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Monterey Jack Cheese',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Colby Jack Cheese',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Duck Sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Gochujang',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Dried Oregano',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Chopped Parsley',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Chocolate Chips',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Condensed Milk',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'White Chocolate Chips',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Miniature Marshmallows',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Wood Ear Mushrooms',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Tofu',
                'food_ids' => '["157","158","161"]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-24 09:12:19',
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Vinegar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Greek Yogurt',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Fruit Mix',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'whole wheat',
                'food_ids' => '["405"]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-24 09:13:47',
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'lamb loin chops',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'turnips',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'charlotte potatoes',
                'food_ids' => '["253"]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'fresh thyme',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Kidney Beans',
                'food_ids' => '["174"]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-24 08:43:05',
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Curry Powder',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Sushi Rice',
                'food_ids' => '["392"]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'Mirin',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Fries',
                'food_ids' => '["253"]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Doner Meat',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Gouda cheese',
                'food_ids' => '["99"]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-24 08:40:13',
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'sage',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'carrot',
                'food_ids' => '["203"]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-24 08:29:13',
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'Smoked Haddock',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Water Chestnut',
                'food_ids' => '["287"]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-24 09:13:46',
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Peanuts',
                'food_ids' => '["136"]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'Chilli',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'Ras el hanout',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Pumpkin',
                'food_ids' => '["279","254","302"]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Lamb',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Saffron',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'Red Chilli Flakes',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Shortening',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'Canola Oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Boiling Water',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Brown Lentils',
                'food_ids' => '["164","180","181"]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-24 08:25:18',
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'vine leaves',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'fennel bulb',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'lamb mince',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'clove',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Khus khus',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Ginger garlic paste',
                'food_ids' => '["245","260"]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'Full fat yogurt',
                'food_ids' => '["121"]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'Biryani masala',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'Madras Paste',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'Thai red curry paste',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'fish sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'rice noodles',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'Lamb Leg',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Butternut Squash',
                'food_ids' => '["224"]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-24 08:25:18',
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Lasagne Sheets',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Mozzarella Balls',
                'food_ids' => '["96"]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-24 08:59:56',
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'Lamb Kidney',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'Bulgur Wheat',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'Bun',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'Prunes',
                'food_ids' => '["79"]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'baby plum tomatoes',
                'food_ids' => '["284"]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-22 13:52:32',
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'fresh basil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'farfalle',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'extra virgin olive oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Green Olives',
                'food_ids' => '["296"]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-24 08:43:04',
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'tuna',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Massaman curry paste',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Jasmine Rice',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Chestnuts',
                'food_ids' => '["142","143"]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-24 08:29:14',
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Wild Mushrooms',
                'food_ids' => '["263"]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-24 09:13:47',
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Truffle Oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'Paneer',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Naan Bread',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Doubanjiang',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Fermented Black Beans',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Sichuan pepper',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'Scallions',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Goat Meat',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'Mincemeat',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Mulukhiyah',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'Chinese Broccoli',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'Desiccated Coconut',
                'food_ids' => '["83"]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-24 08:36:07',
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'Custard Powder',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'Anchovy Fillet',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'Veal',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'Orange Zest',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'Lemon Zest',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'Oxtail',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'rice stick noodles',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'dark soy sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'peanut oil',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'Spinach',
                'food_ids' => '["281"]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Beef Gravy',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Cheese Curds',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Spaghetti',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'Pilchards',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Fennel Seeds',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'Haricot Beans',
                'food_ids' => '["172"]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-24 08:43:04',
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'Blueberries',
                'food_ids' => '["38"]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-24 08:25:17',
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'Peanut Cookies',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Gelatine Leafs',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'Peanut Brittle',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Peaches',
                'food_ids' => '["53","54","55"]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'Oatmeal',
                'food_ids' => '["365","366","378","379"]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-24 08:59:56',
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'Ground Ginger',
                'food_ids' => '["245"]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-24 08:43:04',
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Pears',
                'food_ids' => '["77"]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Rocket',
                'food_ids' => '["250"]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-24 09:07:05',
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Tiger Prawns',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Creamed Corn',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Ciabatta',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Squid',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Baguette',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'smoky paprika',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'pitted black olives',
                'food_ids' => '["295"]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'rigatoni',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'pecorino',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Mackerel',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Tamarind ball',
                'food_ids' => '["68"]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-24 09:12:18',
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'Canned tomatoes',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Wholegrain Bread',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'Apple Cider Vinegar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'Pine nuts',
                'food_ids' => '["147"]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-24 09:04:26',
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Baby Aubergine',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'Paella Rice',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Frozen Peas',
                'food_ids' => '["271"]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-24 08:40:12',
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Jam',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'lean minced beef',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'hot beef stock',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'penne rigate',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'italian seasoning',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Parmigiano-Reggiano',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Cashews',
                'food_ids' => '["139"]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-24 08:29:13',
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Medjool dates',
                'food_ids' => '["71"]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-24 08:57:45',
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Ground cumin',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'asparagus',
                'food_ids' => '["213"]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-22 13:51:50',
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Pretzels',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Caramel',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'Caramel Sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
        ));
        \DB::table('recipe_ingredients')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'Toffee Popcorn',
                'food_ids' => '["235"]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-24 09:12:19',
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'Vermicelli Pasta',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'Monkfish',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'Baby Squid',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'Vine Tomatoes',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'Redcurrants',
                'food_ids' => '["85"]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-24 09:07:05',
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'Dijon Mustard',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-15 09:39:31',
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'Tabasco Sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-15 09:39:31',
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'Salt Cod',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-15 09:39:31',
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'Ackee',
                'food_ids' => '["81"]',
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-22 13:48:34',
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'Cooking wine',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-15 09:39:31',
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'English Muffins',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-15 09:39:31',
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'Smoked Salmon',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-15 09:39:31',
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'Apples',
                'food_ids' => '["19","20","21","22"]',
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-22 13:51:27',
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'Zucchini',
                'food_ids' => '["290"]',
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-24 09:13:47',
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'Rhubarb',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-15 09:39:31',
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'Herring',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-15 09:39:31',
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'Rice wine',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-15 09:39:31',
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'Black Beans',
                'food_ids' => '["167","168"]',
                'created_at' => '2025-04-15 09:39:31',
                'updated_at' => '2025-04-24 08:25:17',
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'stir-fry vegetables',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:32',
                'updated_at' => '2025-04-15 09:39:32',
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'brown rice',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:32',
                'updated_at' => '2025-04-15 09:39:32',
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'Thai green curry paste',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:32',
                'updated_at' => '2025-04-15 09:39:32',
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'Thai fish sauce',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:32',
                'updated_at' => '2025-04-15 09:39:32',
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'horseradish',
                'food_ids' => '["255"]',
                'created_at' => '2025-04-15 09:39:32',
                'updated_at' => '2025-04-24 08:43:05',
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'Turkey Mince',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:32',
                'updated_at' => '2025-04-15 09:39:32',
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'Capers',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:32',
                'updated_at' => '2025-04-15 09:39:32',
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'Tahini',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:32',
                'updated_at' => '2025-04-15 09:39:32',
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'Goats Cheese',
                'food_ids' => '["94"]',
                'created_at' => '2025-04-15 09:39:32',
                'updated_at' => '2025-04-24 08:40:13',
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'green red lentils',
                'food_ids' => '["181"]',
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-24 08:43:04',
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'vegan butter',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-15 09:39:33',
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'soya milk',
                'food_ids' => '["127","133"]',
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-24 09:10:08',
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'coco sugar',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-15 09:39:33',
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'flax eggs',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-15 09:39:33',
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'almond milk',
                'food_ids' => '["124"]',
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-22 13:48:15',
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'Rice Vermicelli',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-15 09:39:33',
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'Egg Rolls',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-15 09:39:33',
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'Paccheri Pasta',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-15 09:39:33',
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'Roasted Vegetables',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-15 09:39:33',
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'Mixed Grain',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-15 09:39:33',
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'Wonton Skin',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:33',
                'updated_at' => '2025-04-15 09:39:33',
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'Udon Noodles',
                'food_ids' => NULL,
                'created_at' => '2025-04-15 09:39:34',
                'updated_at' => '2025-04-15 09:39:34',
            ),
        ));
        
        
    }
}
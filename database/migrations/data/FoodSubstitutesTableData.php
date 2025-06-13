<?php

namespace Database\Migrations\Data;

class FoodSubstitutesTableData
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public static function insert()
    {


        \DB::table('food_substitutes')->delete();

        \DB::table('food_substitutes')->insert(array(
            0 =>
            array(
                'id' => 5,
                'food_id' => 19,
                'substitute_id' => 7,
                'created_at' => '2025-04-22 08:10:13',
                'updated_at' => '2025-04-22 08:10:13',
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'id' => 6,
                'food_id' => 19,
                'substitute_id' => 12,
                'created_at' => '2025-04-22 08:10:14',
                'updated_at' => '2025-04-22 08:10:14',
                'deleted_at' => NULL,
            ),
            2 =>
            array(
                'id' => 7,
                'food_id' => 19,
                'substitute_id' => 24,
                'created_at' => '2025-04-22 08:10:16',
                'updated_at' => '2025-04-22 08:10:16',
                'deleted_at' => NULL,
            ),
            3 =>
            array(
                'id' => 8,
                'food_id' => 19,
                'substitute_id' => 14,
                'created_at' => '2025-04-22 08:10:17',
                'updated_at' => '2025-04-22 08:10:17',
                'deleted_at' => NULL,
            ),
            4 =>
            array(
                'id' => 9,
                'food_id' => 19,
                'substitute_id' => 4,
                'created_at' => '2025-04-22 08:10:18',
                'updated_at' => '2025-04-22 08:10:18',
                'deleted_at' => NULL,
            ),
            5 =>
            array(
                'id' => 10,
                'food_id' => 19,
                'substitute_id' => 30,
                'created_at' => '2025-04-22 08:10:19',
                'updated_at' => '2025-04-22 08:10:19',
                'deleted_at' => NULL,
            ),
            6 =>
            array(
                'id' => 11,
                'food_id' => 19,
                'substitute_id' => 3,
                'created_at' => '2025-04-22 08:10:20',
                'updated_at' => '2025-04-22 08:10:20',
                'deleted_at' => NULL,
            ),
            7 =>
            array(
                'id' => 12,
                'food_id' => 19,
                'substitute_id' => 2,
                'created_at' => '2025-04-22 08:11:29',
                'updated_at' => '2025-04-22 08:11:29',
                'deleted_at' => NULL,
            ),
            8 =>
            array(
                'id' => 13,
                'food_id' => 19,
                'substitute_id' => 25,
                'created_at' => '2025-04-22 08:11:37',
                'updated_at' => '2025-04-22 08:11:37',
                'deleted_at' => NULL,
            ),
            9 =>
            array(
                'id' => 22,
                'food_id' => 1,
                'substitute_id' => 36,
                'created_at' => '2025-04-22 11:21:38',
                'updated_at' => '2025-04-22 11:21:38',
                'deleted_at' => NULL,
            ),
            10 =>
            array(
                'id' => 24,
                'food_id' => 1,
                'substitute_id' => 37,
                'created_at' => '2025-04-22 11:40:22',
                'updated_at' => '2025-04-22 11:40:22',
                'deleted_at' => NULL,
            ),
            11 =>
            array(
                'id' => 25,
                'food_id' => 1,
                'substitute_id' => 28,
                'created_at' => '2025-05-09 11:05:21',
                'updated_at' => '2025-05-09 11:05:22',
                'deleted_at' => '2025-05-09 11:05:22',
            ),
            12 =>
            array(
                'id' => 26,
                'food_id' => 1,
                'substitute_id' => 35,
                'created_at' => '2025-06-02 07:55:25',
                'updated_at' => '2025-06-02 08:02:11',
                'deleted_at' => NULL,
            ),
            13 =>
            array(
                'id' => 27,
                'food_id' => 1,
                'substitute_id' => 23,
                'created_at' => '2025-06-02 08:00:22',
                'updated_at' => '2025-06-02 08:13:49',
                'deleted_at' => '2025-06-02 08:13:49',
            ),
        ));
    }

    /**
     * Turncate Table
     * @return void
     */
    public static function truncate()
    {
        \DB::table('food_substitutes')->truncate();
    }
}

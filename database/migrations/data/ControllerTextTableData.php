<?php

namespace Database\Migrations\Data;

class ControllerTextTableData
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public static function insert()
    {


        \DB::table('controller_text')->delete();

        \DB::table('controller_text')->insert(array(
            0 =>
            array(
                'id' => 1,
                'text' => 'Food list',
                'created_at' => '2025-05-16 08:35:39',
                'updated_at' => '2025-05-16 08:35:39',
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'text' => 'Food details',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'text' => 'Edit food',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'text' => 'Substitute added successfully.',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'text' => 'Substitute removed successfully.',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            5 =>
            array(
                'id' => 6,
                'text' => 'Mailings',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            6 =>
            array(
                'id' => 7,
                'text' => 'Create Mailing',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            7 =>
            array(
                'id' => 8,
                'text' => 'Mailing created successfully.',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            8 =>
            array(
                'id' => 9,
                'text' => 'Edit Mailing',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            9 =>
            array(
                'id' => 10,
                'text' => 'Mailing updated successfully.',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            10 =>
            array(
                'id' => 11,
                'text' => 'Mailing deleted successfully.',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            11 =>
            array(
                'id' => 12,
                'text' => 'Recipes',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            12 =>
            array(
                'id' => 13,
                'text' => 'Ingredient list',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            13 =>
            array(
                'id' => 14,
                'text' => 'Linked foods saved successfully.',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            14 =>
            array(
                'id' => 15,
                'text' => 'Failed to save linked foods.',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            15 =>
            array(
                'id' => 16,
                'text' => 'Translations',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            16 =>
            array(
                'id' => 17,
                'text' => 'Languages',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            17 =>
            array(
                'id' => 18,
                'text' => 'Translation updated successfully.',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            18 =>
            array(
                'id' => 19,
                'text' => 'The provided credentials do not match our records.',
                'created_at' => '2025-05-16 08:36:00',
                'updated_at' => '2025-05-16 08:36:00',
                'deleted_at' => NULL,
            ),
            19 =>
            array(
                'id' => 20,
                'text' => 'User Settings',
                'created_at' => '2025-06-03 13:47:40',
                'updated_at' => '2025-06-03 13:47:40',
                'deleted_at' => NULL,
            ),
        ));
    }

    /**
     * Turncate Table
     * @return void
     */
    public static function truncate()
    {
        \DB::table('controller_text')->truncate();
    }
}

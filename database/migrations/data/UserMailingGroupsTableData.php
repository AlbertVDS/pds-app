<?php

namespace Database\Migrations\Data;



class UserMailingGroupsTableData
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public static function insert()
    {


        \DB::table('user_mailing_groups')->delete();

        \DB::table('user_mailing_groups')->insert(array(
            0 =>
            array(
                'id' => 1,
                'user_id' => 2,
                'mailing_group_id' => 1,
                'created_at' => '2025-06-06 10:39:32',
                'updated_at' => '2025-06-06 11:23:05',
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'user_id' => 2,
                'mailing_group_id' => 3,
                'created_at' => '2025-06-06 10:39:32',
                'updated_at' => '2025-06-06 10:47:27',
                'deleted_at' => '2025-06-06 10:47:27',
            ),
            2 =>
            array(
                'id' => 6,
                'user_id' => 2,
                'mailing_group_id' => 2,
                'created_at' => '2025-06-06 10:47:27',
                'updated_at' => '2025-06-06 11:07:47',
                'deleted_at' => '2025-06-06 11:07:47',
            ),
        ));
    }

    /**
     * Turncate Table
     * @return void
     */
    public static function truncate()
    {
        \DB::table('user_mailing_groups')->truncate();
    }
}

<?php

namespace Database\Migrations\Data;



class UserFodmapsTableData
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public static function insert()
    {


        \DB::table('user_fodmaps')->delete();

        \DB::table('user_fodmaps')->insert(array(
            0 =>
            array(
                'id' => 1,
                'user_id' => 2,
                'fructose' => 1,
                'lactose' => 1,
                'mannitol' => 0,
                'sorbitol' => 1,
                'GOS' => 0,
                'fructan' => 0,
                'created_at' => '2025-06-06 09:54:43',
                'updated_at' => '2025-06-06 11:23:05',
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
        \DB::table('user_fodmaps')->truncate();
    }
}

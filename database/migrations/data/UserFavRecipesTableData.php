<?php

namespace Database\Migrations\Data;



class UserFavRecipesTableData
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public static function insert()
    {


        \DB::table('user_fav_recipes')->delete();

        \DB::table('user_fav_recipes')->insert(array(
            0 =>
            array(
                'id' => 2,
                'user_id' => 2,
                'recipe_id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 11,
                'user_id' => 2,
                'recipe_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 13,
                'user_id' => 2,
                'recipe_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }

    /**
     * Turncate Table
     * @return void
     */
    public static function truncate()
    {
        \DB::table('user_fav_recipes')->truncate();
    }
}

<?php

namespace Database\Migrations\Data;



class MailingGroupsTableData
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public static function insert()
    {


        \DB::table('mailing_groups')->delete();

        \DB::table('mailing_groups')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Recipes',
                'description' => 'Recieve a weekly mail with recipes suggestions. ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'News',
                'description' => ' Recieve a monthly mail with news about the app other FODMAP news. ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Global',
                'description' => ' General mail, sent out when important app changes occur or other important information. ',
                'created_at' => NULL,
                'updated_at' => NULL,
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
        \DB::table('mailing_groups')->truncate();
    }
}

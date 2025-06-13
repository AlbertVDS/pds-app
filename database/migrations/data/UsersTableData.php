<?php

namespace Database\Migrations\Data;



class UsersTableData
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public static function insert()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@pds-app.site',
                'email_verified_at' => '2025-04-25 07:43:03',
                'password' => '$2y$12$cVe/Q6R2CLJxBh6TGa92yu5xV.X9iSfGiGIlxARmYJMMGWCzr7QO.',
                'role_id' => 1,
                'language_id' => 39,
                'remember_token' => NULL,
                'created_at' => '2025-04-25 07:43:04',
                'updated_at' => '2025-04-25 07:43:04',
                'mailing_group_ids' => '[1,2,3]',
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'User',
                'email' => 'user@pds-app.site',
                'email_verified_at' => '2025-04-25 07:43:04',
                'password' => '$2y$12$.VHLBRqJN5f0vqgCkTD6GenH.Hm7dkVU7RV90B6FFrigPPnU8NtAa',
                'role_id' => 2,
                'language_id' => 39,
                'remember_token' => NULL,
                'created_at' => '2025-04-25 07:43:04',
                'updated_at' => '2025-06-06 11:20:18',
                'mailing_group_ids' => '[1,2,3]',
                'deleted_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'test',
                'email' => 'test@pds-app.site',
                'email_verified_at' => NULL,
                'password' => '$2y$12$.M3p0iqsrGExWIMrxRouQuyeTbY6f8YaDMoPkHAvFUaSl0K84wkku',
                'role_id' => 2,
                'language_id' => 41,
                'remember_token' => NULL,
                'created_at' => '2025-04-25 10:57:47',
                'updated_at' => '2025-04-25 10:57:47',
                'mailing_group_ids' => '[1,2,3]',
                'deleted_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'test2',
                'email' => 'test2@pds-app.site',
                'email_verified_at' => NULL,
                'password' => '$2y$12$DYlztiHP.33wRgIPawG41.jF7Lgv9ltkK2ee05JuvC1lLXJEStA5W',
                'role_id' => 2,
                'language_id' => 41,
                'remember_token' => NULL,
                'created_at' => '2025-04-25 11:03:27',
                'updated_at' => '2025-04-25 11:03:27',
                'mailing_group_ids' => '[1,2,3]',
                'deleted_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'test4',
                'email' => 'test4@pds-app.site',
                'email_verified_at' => NULL,
                'password' => '$2y$12$zUwNZQvkQsgo68O49FDhXOHSrI1Lmv/UBG/qhLrIHDaIaCSHJukFy',
                'role_id' => 2,
                'language_id' => 41,
                'remember_token' => NULL,
                'created_at' => '2025-04-25 11:11:37',
                'updated_at' => '2025-04-25 11:11:37',
                'mailing_group_ids' => '[1,2,3]',
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
        \DB::table('users')->truncate();
    }
}

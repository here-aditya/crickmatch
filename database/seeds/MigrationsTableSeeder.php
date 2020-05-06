<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 23,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 24,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 25,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 26,
                'migration' => '2020_05_05_015848_create_teams_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 27,
                'migration' => '2020_05_05_021511_create_countries_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 28,
                'migration' => '2020_05_05_022551_create_states_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 29,
                'migration' => '2020_05_05_040720_create_players_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 32,
                'migration' => '2020_05_05_045032_create_teamplayers_table',
                'batch' => 2,
            ),
            8 => 
            array (
                'id' => 38,
                'migration' => '2020_05_05_050735_create_matches_table',
                'batch' => 3,
            ),
            9 => 
            array (
                'id' => 39,
                'migration' => '2020_05_05_051811_create_points_table',
                'batch' => 3,
            ),
            10 => 
            array (
                'id' => 40,
                'migration' => '2020_05_05_052513_create_pointmaster_table',
                'batch' => 3,
            ),
            11 => 
            array (
                'id' => 41,
                'migration' => '2016_06_01_000001_create_oauth_auth_codes_table',
                'batch' => 4,
            ),
            12 => 
            array (
                'id' => 42,
                'migration' => '2016_06_01_000002_create_oauth_access_tokens_table',
                'batch' => 4,
            ),
            13 => 
            array (
                'id' => 43,
                'migration' => '2016_06_01_000003_create_oauth_refresh_tokens_table',
                'batch' => 4,
            ),
            14 => 
            array (
                'id' => 44,
                'migration' => '2016_06_01_000004_create_oauth_clients_table',
                'batch' => 4,
            ),
            15 => 
            array (
                'id' => 45,
                'migration' => '2016_06_01_000005_create_oauth_personal_access_clients_table',
                'batch' => 4,
            ),
            16 => 
            array (
                'id' => 48,
                'migration' => '2020_05_06_160401_create_points_table',
                'batch' => 5,
            ),
        ));
        
        
    }
}
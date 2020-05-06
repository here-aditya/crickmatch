<?php

use Illuminate\Database\Seeder;

class TblTeamPlayersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_team_players')->delete();
        
        \DB::table('tbl_team_players')->insert(array (
            0 => 
            array (
                'id' => 1,
                'team_id' => 1,
                'player_id' => 1,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:48:38',
                'updated_dt' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'team_id' => 1,
                'player_id' => 2,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:48:38',
                'updated_dt' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'team_id' => 1,
                'player_id' => 3,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:48:38',
                'updated_dt' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'team_id' => 2,
                'player_id' => 4,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:48:38',
                'updated_dt' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'team_id' => 2,
                'player_id' => 5,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:48:38',
                'updated_dt' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'team_id' => 2,
                'player_id' => 6,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:49:25',
                'updated_dt' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'team_id' => 3,
                'player_id' => 7,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:50:24',
                'updated_dt' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'team_id' => 3,
                'player_id' => 8,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:50:24',
                'updated_dt' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'team_id' => 3,
                'player_id' => 9,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:50:24',
                'updated_dt' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'team_id' => 4,
                'player_id' => 10,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:51:02',
                'updated_dt' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'team_id' => 4,
                'player_id' => 11,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:51:02',
                'updated_dt' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'team_id' => 4,
                'player_id' => 12,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:51:02',
                'updated_dt' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'team_id' => 5,
                'player_id' => 13,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:52:00',
                'updated_dt' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'team_id' => 5,
                'player_id' => 14,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:52:00',
                'updated_dt' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'team_id' => 5,
                'player_id' => 15,
                'is_active' => 1,
                'assigned_dt' => '2020-05-06 01:52:00',
                'updated_dt' => NULL,
            ),
        ));
        
        
    }
}
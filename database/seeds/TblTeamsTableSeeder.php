<?php

use Illuminate\Database\Seeder;

class TblTeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_teams')->delete();
        
        \DB::table('tbl_teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Team A',
                'logo_url' => '/storage/teamlogo/logo_1.jpg',
                'state_id' => 1,
                'country_id' => 1,
                'is_active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Team B',
                'logo_url' => '/storage/teamlogo/logo_2.jpg',
                'state_id' => 2,
                'country_id' => 1,
                'is_active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Team C',
                'logo_url' => '/storage/teamlogo/logo_3.jpg',
                'state_id' => 3,
                'country_id' => 1,
                'is_active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Team D',
                'logo_url' => '/storage/teamlogo/logo_4.jpg',
                'state_id' => 4,
                'country_id' => 1,
                'is_active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Team E',
                'logo_url' => '/storage/teamlogo/logo_5.jpg',
                'state_id' => 5,
                'country_id' => 1,
                'is_active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Team F',
                'logo_url' => '/storage/teamlogo/logo_6.jpg',
                'state_id' => 6,
                'country_id' => 1,
                'is_active' => 0,
            ),
        ));
        
        
    }
}
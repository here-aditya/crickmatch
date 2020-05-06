<?php

use Illuminate\Database\Seeder;

class TblPointsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_points')->delete();
        
        \DB::table('tbl_points')->insert(array (
            0 => 
            array (
                'id' => 1,
                'team_id' => 1,
                'points' => 6,
                'won' => 3,
                'lost' => 1,
                'draw' => 0,
                'updated_on' => '2020-05-06 21:50:10',
            ),
            1 => 
            array (
                'id' => 2,
                'team_id' => 2,
                'points' => 2,
                'won' => 1,
                'lost' => 3,
                'draw' => 0,
                'updated_on' => '2020-05-06 21:50:10',
            ),
            2 => 
            array (
                'id' => 3,
                'team_id' => 3,
                'points' => 3,
                'won' => 1,
                'lost' => 2,
                'draw' => 1,
                'updated_on' => '2020-05-06 21:50:10',
            ),
            3 => 
            array (
                'id' => 4,
                'team_id' => 4,
                'points' => 5,
                'won' => 2,
                'lost' => 1,
                'draw' => 1,
                'updated_on' => '2020-05-06 21:50:10',
            ),
            4 => 
            array (
                'id' => 5,
                'team_id' => 5,
                'points' => 4,
                'won' => 2,
                'lost' => 2,
                'draw' => 0,
                'updated_on' => '2020-05-06 21:50:10',
            ),
        ));
        
        
    }
}
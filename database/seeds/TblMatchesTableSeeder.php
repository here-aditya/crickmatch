<?php

use Illuminate\Database\Seeder;

class TblMatchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_matches')->delete();
        
        \DB::table('tbl_matches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'team_a_id' => 1,
                'team_b_id' => 2,
                'is_draw' => 0,
                'winner_id' => 1,
                'played_on' => '2020-05-06 21:50:10',
            ),
            1 => 
            array (
                'id' => 2,
                'team_a_id' => 1,
                'team_b_id' => 3,
                'is_draw' => 0,
                'winner_id' => 1,
                'played_on' => '2020-05-06 21:50:10',
            ),
            2 => 
            array (
                'id' => 3,
                'team_a_id' => 1,
                'team_b_id' => 4,
                'is_draw' => 0,
                'winner_id' => 4,
                'played_on' => '2020-05-06 21:50:10',
            ),
            3 => 
            array (
                'id' => 4,
                'team_a_id' => 1,
                'team_b_id' => 5,
                'is_draw' => 0,
                'winner_id' => 1,
                'played_on' => '2020-05-06 21:50:10',
            ),
            4 => 
            array (
                'id' => 5,
                'team_a_id' => 2,
                'team_b_id' => 3,
                'is_draw' => 0,
                'winner_id' => 2,
                'played_on' => '2020-05-06 21:50:10',
            ),
            5 => 
            array (
                'id' => 6,
                'team_a_id' => 2,
                'team_b_id' => 4,
                'is_draw' => 0,
                'winner_id' => 4,
                'played_on' => '2020-05-06 21:50:10',
            ),
            6 => 
            array (
                'id' => 7,
                'team_a_id' => 2,
                'team_b_id' => 5,
                'is_draw' => 0,
                'winner_id' => 5,
                'played_on' => '2020-05-06 21:50:10',
            ),
            7 => 
            array (
                'id' => 8,
                'team_a_id' => 3,
                'team_b_id' => 4,
                'is_draw' => 1,
                'winner_id' => 0,
                'played_on' => '2020-05-06 21:50:10',
            ),
            8 => 
            array (
                'id' => 9,
                'team_a_id' => 3,
                'team_b_id' => 5,
                'is_draw' => 0,
                'winner_id' => 3,
                'played_on' => '2020-05-06 21:50:10',
            ),
            9 => 
            array (
                'id' => 10,
                'team_a_id' => 4,
                'team_b_id' => 5,
                'is_draw' => 0,
                'winner_id' => 5,
                'played_on' => '2020-05-06 21:50:10',
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class TblPlayersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_players')->delete();
        
        \DB::table('tbl_players')->insert(array (
            0 => 
            array (
                'id' => 1,
                'f_name' => 'Player',
                'l_name' => 'A',
                'prof_image' => '/storage/playerlogo/logo_1.png',
                'jersey_no' => 1,
                'state_id' => 1,
                'country_id' => 101,
                'history' => '{"matches":120,"run":8000,"highest":220,"fifties":30,"hundreds":12}',
            ),
            1 => 
            array (
                'id' => 2,
                'f_name' => 'Player',
                'l_name' => 'B',
                'prof_image' => '/storage/playerlogo/logo_2.png',
                'jersey_no' => 2,
                'state_id' => 2,
                'country_id' => 101,
                'history' => '{"matches":80,"run":5000,"highest":120,"fifties":12,"hundreds":6}',
            ),
            2 => 
            array (
                'id' => 3,
                'f_name' => 'Player',
                'l_name' => 'C',
                'prof_image' => '/storage/playerlogo/logo_3.png',
                'jersey_no' => 3,
                'state_id' => 3,
                'country_id' => 101,
                'history' => '{"matches":156,"run":7400,"highest":190,"fifties":15,"hundreds":8}',
            ),
            3 => 
            array (
                'id' => 4,
                'f_name' => 'Player',
                'l_name' => 'D',
                'prof_image' => '/storage/playerlogo/logo_4.png',
                'jersey_no' => 4,
                'state_id' => 4,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            4 => 
            array (
                'id' => 5,
                'f_name' => 'Player',
                'l_name' => 'E',
                'prof_image' => '/storage/playerlogo/logo_5.png',
                'jersey_no' => 5,
                'state_id' => 5,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            5 => 
            array (
                'id' => 6,
                'f_name' => 'Player',
                'l_name' => 'F',
                'prof_image' => '/storage/playerlogo/logo_6.png',
                'jersey_no' => 6,
                'state_id' => 6,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            6 => 
            array (
                'id' => 7,
                'f_name' => 'Player',
                'l_name' => 'G',
                'prof_image' => '/storage/playerlogo/logo_1.png',
                'jersey_no' => 7,
                'state_id' => 7,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            7 => 
            array (
                'id' => 8,
                'f_name' => 'Player',
                'l_name' => 'H',
                'prof_image' => '/storage/playerlogo/logo_2.png',
                'jersey_no' => 8,
                'state_id' => 8,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            8 => 
            array (
                'id' => 9,
                'f_name' => 'Player',
                'l_name' => 'I',
                'prof_image' => '/storage/playerlogo/logo_3.png',
                'jersey_no' => 9,
                'state_id' => 9,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            9 => 
            array (
                'id' => 10,
                'f_name' => 'Player',
                'l_name' => 'J',
                'prof_image' => '/storage/playerlogo/logo_4.png',
                'jersey_no' => 10,
                'state_id' => 10,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            10 => 
            array (
                'id' => 11,
                'f_name' => 'Player',
                'l_name' => 'K',
                'prof_image' => '/storage/playerlogo/logo_5.png',
                'jersey_no' => 11,
                'state_id' => 11,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            11 => 
            array (
                'id' => 12,
                'f_name' => 'Player',
                'l_name' => 'L',
                'prof_image' => '/storage/playerlogo/logo_6.png',
                'jersey_no' => 12,
                'state_id' => 12,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            12 => 
            array (
                'id' => 13,
                'f_name' => 'Player',
                'l_name' => 'M',
                'prof_image' => '/storage/playerlogo/logo_1.png',
                'jersey_no' => 13,
                'state_id' => 13,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            13 => 
            array (
                'id' => 14,
                'f_name' => 'Player',
                'l_name' => 'N',
                'prof_image' => '/storage/playerlogo/logo_2.png',
                'jersey_no' => 14,
                'state_id' => 14,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
            14 => 
            array (
                'id' => 15,
                'f_name' => 'Player',
                'l_name' => 'O',
                'prof_image' => '/storage/playerlogo/logo_3.png',
                'jersey_no' => 15,
                'state_id' => 15,
                'country_id' => 101,
                'history' => '{"matches":0,"run":0,"highest":0,"fifties":0,"hundreds":0}',
            ),
        ));
        
        
    }
}
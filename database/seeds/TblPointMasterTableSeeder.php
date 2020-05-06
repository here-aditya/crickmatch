<?php

use Illuminate\Database\Seeder;

class TblPointMasterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_point_master')->delete();
        
        \DB::table('tbl_point_master')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'win',
                'points' => 2,
                'last_update_dt' => '2020-05-05 11:04:42',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'draw',
                'points' => 1,
                'last_update_dt' => '2020-05-05 11:04:42',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'loose',
                'points' => 0,
                'last_update_dt' => '2020-05-05 11:04:55',
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Aditya Das',
                'email' => 'here_aditya@yahoo.co.in',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Im9gd00RIyE9KQ/JlmUaeevi5kfi9dPN7X6qAuoEVF4YzCVN.LgI.',
                'remember_token' => NULL,
                'created_at' => '2020-05-05 12:46:55',
                'updated_at' => '2020-05-05 12:46:55',
            ),
        ));
        
        
    }
}
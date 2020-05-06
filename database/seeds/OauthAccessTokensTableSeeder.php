<?php

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '14c05576c287f7aac8065952dcecac1512dc830aec0d653dbe23d193b3c1777b2e01200b9b93564c',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-05-06 14:56:02',
                'updated_at' => '2020-05-06 14:56:02',
                'expires_at' => '2021-05-06 14:56:02',
            ),
            1 => 
            array (
                'id' => '22c020efb7a5e28729fcfb036beb246fdb02ffbc9033bbf98766286bf4d7d01097ced26d9f690b92',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-05-06 15:52:12',
                'updated_at' => '2020-05-06 15:52:12',
                'expires_at' => '2021-05-06 15:52:12',
            ),
            2 => 
            array (
                'id' => '2bb72261624e3e75183d61b3895833167329924d6270bf597d9ebd9d8c6eaf0729bb72b086db7a40',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'MyApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-05-05 12:42:16',
                'updated_at' => '2020-05-05 12:42:16',
                'expires_at' => '2021-05-05 12:42:16',
            ),
            3 => 
            array (
                'id' => '2ce9a3b43795f558f488442b57fe89235e9025d1aaded2fe31cd75dc0409d32063bf593f182db391',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-05-06 15:11:47',
                'updated_at' => '2020-05-06 15:11:47',
                'expires_at' => '2021-05-06 15:11:47',
            ),
            4 => 
            array (
                'id' => '3f2823561dfdf14d30bf5a881c54ae0a097a60128065443f607779b61b9a97d1e39f579199059cb8',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-05-06 14:45:51',
                'updated_at' => '2020-05-06 14:45:51',
                'expires_at' => '2021-05-06 14:45:51',
            ),
            5 => 
            array (
                'id' => '49163200a12db5b8eb4d3b152c11ac9c15c92f387d5ad51d91e851a95dad6b5463c65dd3fa1f5fd2',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => 0,
                'created_at' => '2020-05-06 15:47:16',
                'updated_at' => '2020-05-06 15:47:16',
                'expires_at' => '2021-05-06 15:47:16',
            ),
            6 => 
            array (
                'id' => '4ee61f4483d0f1d7287e25358b7f273958210401f6397a4017fccc2fdcb1b1038b55f747cab26c2f',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => 0,
                'created_at' => '2020-05-06 15:39:43',
                'updated_at' => '2020-05-06 15:39:43',
                'expires_at' => '2021-05-06 15:39:43',
            ),
            7 => 
            array (
                'id' => 'b5ba7d2079730d90fa302d6b65554425fab2151122dad5fed4afdea0e96911598b1120fdfd52f526',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'MyApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-05-05 12:45:41',
                'updated_at' => '2020-05-05 12:45:41',
                'expires_at' => '2021-05-05 12:45:41',
            ),
            8 => 
            array (
                'id' => 'cb1c87cd53f9ea051ace1f332d0a7be1454f2ad9101cc4a4984032d3329fa3d688523859bbbb97b0',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'MyApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-05-05 12:46:56',
                'updated_at' => '2020-05-05 12:46:56',
                'expires_at' => '2021-05-05 12:46:56',
            ),
            9 => 
            array (
                'id' => 'f323b1ae879f1689cbe67d8096f08d5f22d9d46d1936ebb93d4266cb45e4d29e9d861aac4d6b7e57',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-05-06 15:02:50',
                'updated_at' => '2020-05-06 15:02:50',
                'expires_at' => '2021-05-06 15:02:50',
            ),
        ));
        
        
    }
}
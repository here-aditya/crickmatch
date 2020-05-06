<?php

use Illuminate\Database\Seeder;

class OauthRefreshTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_refresh_tokens')->delete();
        
        \DB::table('oauth_refresh_tokens')->insert(array (
            0 => 
            array (
                'id' => '15170875872788f1c3d7ff6b04670fc2d655196e095313e78f6c835079344cbb7676f0dcccc631cc',
                'access_token_id' => '14c05576c287f7aac8065952dcecac1512dc830aec0d653dbe23d193b3c1777b2e01200b9b93564c',
                'revoked' => 0,
                'expires_at' => '2021-05-06 14:56:02',
            ),
            1 => 
            array (
                'id' => '37b139acbb2c4164927d8dd0012f7ab9a2f5c1f0db1dc686920fe93cb0b08d581a68e5f1e22ab101',
                'access_token_id' => '4ee61f4483d0f1d7287e25358b7f273958210401f6397a4017fccc2fdcb1b1038b55f747cab26c2f',
                'revoked' => 0,
                'expires_at' => '2021-05-06 15:39:43',
            ),
            2 => 
            array (
                'id' => '4d3a888a49403c15fa4e90ddc6b214dad1222dea3f65479f25aa3ff2db7800a6f317fae6e05caeb2',
                'access_token_id' => '3f2823561dfdf14d30bf5a881c54ae0a097a60128065443f607779b61b9a97d1e39f579199059cb8',
                'revoked' => 0,
                'expires_at' => '2021-05-06 14:45:52',
            ),
            3 => 
            array (
                'id' => '792aafb0e9e40881dfe7deeddba791b13a05143fa05a3d29a6ec0aff797749aa1a787443073e3b02',
                'access_token_id' => '49163200a12db5b8eb4d3b152c11ac9c15c92f387d5ad51d91e851a95dad6b5463c65dd3fa1f5fd2',
                'revoked' => 0,
                'expires_at' => '2021-05-06 15:47:16',
            ),
            4 => 
            array (
                'id' => 'b3849b922c71d90a322e11b437c5cf31a347878ad4acae69df458cbbf8192abe9591042fc2041a66',
                'access_token_id' => '22c020efb7a5e28729fcfb036beb246fdb02ffbc9033bbf98766286bf4d7d01097ced26d9f690b92',
                'revoked' => 0,
                'expires_at' => '2021-05-06 15:52:12',
            ),
            5 => 
            array (
                'id' => 'c1504069e0bd96f7c102bbc0846694c568c65e5fb7839eca2868a22645ad962c503202a87cb371ac',
                'access_token_id' => 'f323b1ae879f1689cbe67d8096f08d5f22d9d46d1936ebb93d4266cb45e4d29e9d861aac4d6b7e57',
                'revoked' => 0,
                'expires_at' => '2021-05-06 15:02:50',
            ),
            6 => 
            array (
                'id' => 'efe9e777fab3255244bcb7ada879f7cbfdc62aa9c97f64558b9341571a87bbddf1ec1030d3cb15aa',
                'access_token_id' => '2ce9a3b43795f558f488442b57fe89235e9025d1aaded2fe31cd75dc0409d32063bf593f182db391',
                'revoked' => 0,
                'expires_at' => '2021-05-06 15:11:47',
            ),
        ));
        
        
    }
}
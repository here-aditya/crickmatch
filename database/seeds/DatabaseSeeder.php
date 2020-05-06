<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FailedJobsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(OauthAccessTokensTableSeeder::class);
        $this->call(OauthAuthCodesTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(OauthPersonalAccessClientsTableSeeder::class);
        $this->call(OauthRefreshTokensTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(TblCountriesTableSeeder::class);
        $this->call(TblMatchesTableSeeder::class);
        $this->call(TblPlayersTableSeeder::class);
        $this->call(TblPointMasterTableSeeder::class);
        $this->call(TblPointsTableSeeder::class);
        $this->call(TblStatesTableSeeder::class);
        $this->call(TblTeamPlayersTableSeeder::class);
        $this->call(TblTeamsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

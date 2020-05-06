<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamplayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_team_players', function (Blueprint $table) {
            $table->integer('id', 11)->unsigned()->autoIncrement();
            $table->integer('team_id')->unsigned()->index();
            $table->integer('player_id')->unsigned()->index();
            $table->tinyInteger('is_active')->default(1);
            $table->timestamp('assigned_dt')->useCurrent();
            $table->timestamp('updated_dt', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_team_players');
    }
}

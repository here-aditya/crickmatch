<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_matches', function (Blueprint $table) {
            $table->smallInteger('id', 8)->unsigned()->autoIncrement();
            $table->integer('team_a_id')->unsigned()->index();
            $table->integer('team_b_id')->unsigned()->index();
            $table->smallInteger('is_draw');
            $table->integer('winner_id')->unsigned()->index();
            $table->timestamp('played_on')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_matches');
    }
}

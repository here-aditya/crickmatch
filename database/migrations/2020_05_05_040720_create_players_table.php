<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_players', function (Blueprint $table) {
            $table->integer('id', 11)->unsigned()->autoIncrement();
            $table->string('f_name', 100);
            $table->string('l_name', 80);
            $table->text('prof_image');
            $table->smallInteger('jersey_no');
            $table->integer('state_id')->unsigned()->index();
            $table->integer('country_id')->unsigned()->index();
            $json_str = json_encode(
                            array(
                                'matches' => 0, 
                                'run' => 0,
                                'highest' => 0,
                                'fifties' => 0,
                                'hundreds' => 0
                            ));
            $table->json('history')->default($json_str);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_players');
    }
}

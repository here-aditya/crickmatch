<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_points', function (Blueprint $table) {
            $table->smallInteger('id', 8)->unsigned()->autoIncrement();
            $table->integer('team_id')->unsigned()->index();
            $table->smallInteger('points')->unsigned();
            $table->smallInteger('won')->unsigned();
            $table->smallInteger('lost')->unsigned();
            $table->smallInteger('draw')->unsigned();
            $table->timestamp('updated_on')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_points');
    }
}

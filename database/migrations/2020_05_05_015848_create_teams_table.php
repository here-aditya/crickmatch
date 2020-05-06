<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_teams', function (Blueprint $table) {
            $table->smallInteger('id', 8)->unsigned()->autoIncrement();
            $table->string('name', 100);
            $table->text('logo_url');
            $table->integer('state_id')->unsigned()->index();
            $table->integer('country_id')->unsigned()->index();
            $table->tinyInteger('is_active')->default("1");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_teams');
    }
}

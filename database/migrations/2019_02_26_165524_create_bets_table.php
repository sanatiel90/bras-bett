<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('points_gained')->default(0);
            $table->integer('goals_team_home');
            $table->integer('goals_team_visit');
            $table->unsignedInteger('result_id');
            $table->foreign('result_id')->references('id')->on('results');
            $table->boolean('finalizada')->nullable();
            $table->unsignedInteger('id_first_score_team')->nullable();
            $table->foreign('id_first_score_team')->references('id')->on('teams');
            $table->unsignedInteger('game_id');
            $table->foreign('game_id')->references('id')->on('games');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->dateTime('date_bet');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bets');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'goals_team_home', 'goals_team_visit', 'game_date', 'id_team_home',
        'id_team_visit','rodada_id','id_first_score_team','result_id','stadium',
    ];
}

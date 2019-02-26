<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    protected $fillable = [
        'points_gained', 'goals_team_home', 'goals_team_visit', 'result_id', 'finalizada',
        'id_first_score_team', 'game_id', 'user_id', 'date_bet',
    ];

}

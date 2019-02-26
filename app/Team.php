<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected $fillable = [
       'name', 'short_name', 'img_name', 'state',
   ];
}

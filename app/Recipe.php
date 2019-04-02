<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function liked()
    {
      return $this->belongsToMany('App\User', 'likes');
    }
}

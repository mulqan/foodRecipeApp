<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function message(){
    	return $this->belongsTo('App\User');
    }
}

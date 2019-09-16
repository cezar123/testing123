<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    public function user(){
        return $this->morphOne('App\User', 'type');
    }
}

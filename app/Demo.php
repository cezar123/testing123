<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    public function user(){
        return $this->morphOne('App\User', 'type');
    }
}

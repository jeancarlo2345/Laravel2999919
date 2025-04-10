<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computer extends Model
{


    public function aprentice(){
        return $this->hasOne('App\Models\aprentice');
    }

}


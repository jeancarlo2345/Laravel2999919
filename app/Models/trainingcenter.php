<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trainingcenter extends Model
{
    public function course(){
        return $this->hasMany('App\Models\course');
    }



    public function teacher(){
        return $this->hasMany('App\Models\teacher');
    }

}


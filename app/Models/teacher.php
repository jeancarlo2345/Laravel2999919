<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{

    public function trainingcenter()
    {
      return $this->belongsTo('App\Models\trainingcenter');//metodo de laravel
    }
}

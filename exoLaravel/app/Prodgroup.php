<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodgroup extends Model
{
    public function prodgroup()
    {
        return $this->hasMany('App\Model');
    }
}

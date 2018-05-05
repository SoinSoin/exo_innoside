<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public function customers()
    {
            return $this->hasMany('App\Customers');
        
    }
    //
}

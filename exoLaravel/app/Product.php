<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function model()
    {
        return $this->belongsTo('App\Model','customers');
    }
}

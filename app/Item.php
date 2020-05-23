<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}

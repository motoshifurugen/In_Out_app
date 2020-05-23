<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletingTrait;

class Event extends Model
{
    public $timestamps = false;

    public function item()
    {
        return $this->belongTo('App\Item');
    }
    // const UPDATED_AT = 'updated_at';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = false;

    public function contents ()
    {
        return $this->hasMany('App\Content');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function dislike()
    {
        return $this->belongsTo('App\Post');
    }
}

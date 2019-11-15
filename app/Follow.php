<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    public function followedBy()
    {
        return $this->belongsTo('App\User');
    }
    
    public function following()
    {
        return $this->hasMany('App\User', 'following_id');
    }

}

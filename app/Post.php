<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function post()
    {
        return $this->belongsTo('App\User');
    }

    public function profilePicture()
    {
        return $this->hasOne('App\User');
    }

    public function comment()
    {
        return $this->hasOne('App\Comment');
    }

    public function dislike()
    {
        return $this->hasOne('App\Dislike', 'post_id');
    }

    public function report()
    {
        return $this->hasOne('App\Report', 'post_id');
    }
}

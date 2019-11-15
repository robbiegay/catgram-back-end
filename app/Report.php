<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function report()
    {
        return $this->belongsTo('App\Post');
    }

    public function reportedBy()
    {
        return $this->belongsTo('App\User');
    }
}

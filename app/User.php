<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    // HAS
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function dislike()
    {
        return $this->hasMany('App\Dislike');
    }

    public function followedBy()
    {
        return $this->hasMany('App\Follow');
    }

    public function post()
    {
        return $this->hasMany('App\Post');
    }
    
    public function profilePicture()
    {
        return $this->hasOne('App\Post');
    }

    public function reportedBy()
    {
        return $this->hasOne('App\Report', 'reported_by_id');
    }
    
    // BELONGS
    public function following()
    {
        return $this->belongsTo('App\Follow', 'following_id');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function validateForPassportPasswordGrant($password)
    {
        return Hash::check($password, $this->password);
    }
}

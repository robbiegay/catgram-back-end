<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\User;

class UserController extends Controller
{
    // View the post feed
    public function login() {
        $user = new UserCollection(User::where('name', 'Selmer Lesch')->get());
        dd($user);
        // return view('welcome');
    }

    // public function mynewfunct()
    // {
    //     $d =  new UserCollection(User::where('name', 'Selmer Lesch')->get());

    //     return $d;
    // }
}


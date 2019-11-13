<?php

use App\Http\Resources\UserCollection;
use App\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/users', function () {
    return new UserCollection(User::all());
});

Route::get('/posts', 'PostController@show');
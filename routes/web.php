<?php

use App\Http\Resources\PostCollection;
use App\Http\Resources\UserCollection;
use App\Post;


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

// Route::get('/login', 'UserController@login');
// Route::get('/users', 'UserController@mynewfunct');

Route::get('/posts', function() {
    $post = Post::all();
    $post->load('user');
    //dd($post);
    return new PostCollection($post);
});
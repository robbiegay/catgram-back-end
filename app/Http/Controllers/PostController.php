<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserCollection;


use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // View the post feed
    public function index() {
        return view('welcome');
    }

    // View the post in the feed
    public function show() {
        return new UserCollection(Post::all());
    }

    // Create a post
    public function create() {
        return view('welcome');
    }

    // Store a post
    public function store() {
        return view('welcome');
    }

    // Edit a post
    public function edit() {
        return view('welcome');
    }

    // Update the post from edit
    public function update() {
        return view('welcome');
    }

    // Delete a post
    public function destroy() {
        return view('welcome');
    }
    /*
    index -> view all
    show -> view one
    create -> create a resource
    store -> persist a resource
    edit -> edit a resource
    update -> persist that edit
    destroy -> delete a resource
    */
}

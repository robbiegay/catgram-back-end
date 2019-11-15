<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'caption' => $faker->realText($maxNbChars = 400),
        'location' => $faker->city,
        'image_blob' => $faker->imageUrl($width = 400, $height = 400, 'cats'),
    ];
});


// $table->bigInteger('user_id');
// $table->string('caption', 2200);
// $table->boolean('reported')->default(false);
// $table->string('location');
// $table->integer('image_blob');
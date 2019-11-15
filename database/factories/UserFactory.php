<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'phone_number' => 859 . $faker->randomNumber($nbDigits = 7),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'page_bio' => $faker->realText($maxNbChars = 150),
        'private' => $faker->boolean($chanceOfGettingTrue = 0),
        'profile_pic' => $faker->imageUrl($width = 400, $height = 400, 'cats'),
        'remember_token' => Str::random(10),
    ];
});

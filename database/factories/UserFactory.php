<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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

        'nick' => $faker->firstName(),
        'full_name' => $faker->name,
        'email' => $faker->email,
        'password' =>Hash::make($faker->password),
        'picture' => $faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
        'local' => $faker->locale,
        'language' => $faker->languageCode, // pt,
        'level' => '99',
        //'suspension_begining' => ,
        //'suspension_end' => ,
       // 'deleted_at' => ,
        'rate' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 5),
        'verified' => $faker->boolean,
        'especialist' => $faker->boolean,
        'birth' => '2000-03-15',
        'bio' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'email_verified_at' => $faker->dateTime($max = 'now'),// DateTime('2008-04-25 08:37:17', 'UTC'),
        //'remember_token' => ,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

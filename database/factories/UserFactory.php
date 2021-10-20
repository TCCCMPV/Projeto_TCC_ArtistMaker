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

        'nick' => $faker->firstName($gender = null|'male'|'female'),
        'full_name' => $faker->name,
        'email' => $faker->email,
        'password' =>//ver depois
        'picture' => $faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/',
        'local' => $faker->locale,
        'language' => $faker->languageCode, // pt,
        'level' => '99',
        'suspension_begining' => null,
        'suspension_end' => null,
        'deleted_at' => null,
        'rate' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 5),
        'verified' => $faker->boolean,
        'especialist' => $faker->boolean,
        'birth' => //ver depois
        'bio' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'email_verified_at' => $faker->dateTime($max = 'now', $timezone = BRT),// DateTime('2008-04-25 08:37:17', 'UTC'),
        'remember_token' => //ver depois
        'created_at' => $faker->dateTime($max = '2021-10-20 ', $timezone = BRT), // DateTime('2008-04-25 08:37:17', 'UTC'),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null), // DateTime('2008-04-25 08:37:17', 'UTC');

    ];
});

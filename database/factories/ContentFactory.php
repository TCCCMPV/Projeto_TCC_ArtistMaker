<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'tags' => null,
        'name' => $faker->name,
        'description' => realText(200, 2),
        'thumbnail' => imageUrl($width = 640, $height = 480),
        'language' => $faker->languageCode,
        'qualification_level' => randomElement(array (null, 1,2,3)),
        'subcategory_id'//ver depois
        'content_type_id'//ver depois,
        'position' => //ver depois
        'content_id'//ver depois
        'user_id'//ver depois
        'created_at' => $faker->dateTime($max = '2021-10-20 ', $timezone = BRT),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        'deleted_at' => null,
    ];
});

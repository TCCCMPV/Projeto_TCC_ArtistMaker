<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Content;
use Faker\Generator as Faker;

$factory->define(Content::class, function (Faker $faker) {
    return [
        //'tags' => null,
        'name' => $faker->name,
        'description' => $faker->realText(200, 2),
        'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
        'language' => $faker->languageCode,
        'qualification_level' => $faker->randomElement(array (null, 1,2,3)),
        'subcategory_id' => $faker->randomElement(array ('forma', 'linha', 'perspectiva', 'anatomia', 'linhas', 'cor', 'composição', 'luz e sombra', 'outros fundamentos', 'hqs', 'ilustração', 'estilo', 'outros desenho', 'grafite', 'pintura a óleo', 'gravura', 'aquarela', 'colagem', 'lápis de cor', 'giz de cera', 'guache', 'escultura',  'outros técnica', 'pintura', 'cor', 'luz e sombra', 'software', 'hardware', 'modelagem 3D', 'outros digital', 'tradicional', '2D digital', '3D', 'stop motion', 'pixel', 'rotoscopia', 'motion graphics', 'outros animação', 'arte na antiguidade', 'arte medieval', 'arte renascentista', 'arte barroca',' arte do século 18', 'arte do século 19', 'arte do século 20', 'outros história', 'cinematografia', 'cenografia', 'áudio', 'edição de foto e vídeo', 'cinema', 'televisão', 'internet', 'outros áudio e visual', 'fotografia', 'moda', 'design', 'roteiro', )),
        'content_type_id'=> $faker->randomElement(array ('course', 'module', 'tutorial')),
        'position' => '1',  //melhorar depois
        //'content_id'=> null,
        'user_id'=> '1',
        'created_at' => now(),
        'updated_at' => now(),
        //'deleted_at' => null,
    ];
});

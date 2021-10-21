<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 'fundamentos',
        ]);
        DB::table('categories')->insert([
            'id' => 'desenho',
        ]);
        DB::table('categories')->insert([
            'id' => 'tecnica',
        ]);
        DB::table('categories')->insert([
            'id' => 'digital',
        ]);
        DB::table('categories')->insert([
            'id' => 'animação',
        ]);
        DB::table('categories')->insert([
            'id' => 'história',
        ]);
        DB::table('categories')->insert([
            'id' => 'audio e visual',
        ]);
        DB::table('categories')->insert([
            'id' => 'outros',
        ]);
    }
}
//
//fundamentos-> forma, linha, perspectiva, anatomia, linhas, cor, composição, luz e sombra, outros
//desenho-> HQs, ilustração, estilo, outros
//tecnica-> grafite, pintura a olio, gravura, aquarela, colagem, lápis de cor, giz de cera, guache, escultura,  outros
//digital-> pintura, cor, luz e sombra, software, hardware, modelagem 3D, outros
//animação-> tradicional, 2D digital, 3D, stop motion, pixel, Rotoscopia, motion ghrafics, outros
//história-> Arte na antiguidade, arte medieval, arte renascentista, arte barroca, arte do século 18, arte do século 19, arte do século 20
//audio e visual-> cinematografia, cenografia, audio, edição de foto e vídeo, cinema, televisão, internet, outros
//outros-> fotografia, moda, design, roteiro

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
            'id' => 'Digital',
        ],
        [
            'id' => 'Traditional'
        ],
        [
            'id' => ''
        ],
        [
            'id' => ''
        ],
        [
            'id' => ''
        ],
        [
            'id' => ''
        ],
        [
            'id' => ''
        ],
        [
            'id' => ''
        ],
        [
            'id' => ''
        ],
        [
            'id' => ''
        ],
    );
    }
}
//
//Fundamentos-> forma, linha, perspectiva, anatomia, linhas, cor, composição, luz e sombra, outros
//desenho-> HQs, ilustração, estilo, outros
//tecnica-> grafite, pintura a olio, gravura, aquarela, colagem, lápis de cor, giz de cera, guache, escultura,  outros
//digital-> pintura, cor, luz e sombra, software, hardware, modelagem 3D, outros
//animação-> tradicional, 2D digital, 3D, stop motion, pixel, Rotoscopia, motion ghrafics, outros
//história-> Arte contenporânea, 
//audio e visual-> cinematografia, cenografia, audio, edição de foto e vídeo, cinema, televisão, internet, outros
//outros-> fotografia, moda, design, roteiro

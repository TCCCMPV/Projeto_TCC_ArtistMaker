<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    public function run()
    {
        //fundamentos-> forma, linha, perspectiva, anatomia, linhas, cor, composição, luz e sombra, outros fundamentos
        DB::table('subcategories')->insert([
            'id' => 'forma',
            'category_id' => 'fundamentos',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'linha',
            'category_id' => 'fundamentos',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'perspectiva',
            'category_id' => 'fundamentos',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'anatomia',
            'category_id' => 'fundamentos',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'linhas',
            'category_id' => 'fundamentos',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'cor',
            'category_id' => 'fundamentos',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'composição',
            'category_id' => 'fundamentos',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'luz e sombra',
            'category_id' => 'fundamentos',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'outros fundamentos',
            'category_id' => 'fundamentos',
        ]);
        //desenho-> hqs, ilustração, estilo, outros desenho
        DB::table('subcategories')->insert([
            'id' => 'hqs',
            'category_id' => 'desenho',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'ilustração',
            'category_id' => 'desenho',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'estilo',
            'category_id' => 'desenho',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'outros desenho',
            'category_id' => 'desenho',
        ]);
        //técnica-> grafite, pintura a óleo, gravura, aquarela, colagem, lápis de cor, giz de cera, guache, escultura,  outros técnica
        DB::table('subcategories')->insert([
            'id' => 'grafite',
            'category_id' => 'técnica',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'pintura a óleo',
            'category_id' => 'técnica',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'gravura',
            'category_id' => 'técnica',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'aquarela',
            'category_id' => 'técnica',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'colagem',
            'category_id' => 'técnica',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'lápis de cor',
            'category_id' => 'técnica',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'giz de cera',
            'category_id' => 'técnica',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'guache',
            'category_id' => 'técnica',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'escultura',
            'category_id' => 'tecnica',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'outros técnica',
            'category_id' => 'técnica',
        ]);
        //digital-> pintura, cor, luz e sombra, software, hardware, modelagem 3D, outros digital
        DB::table('subcategories')->insert([
            'id' => 'pintura',
            'category_id' => 'digital',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'cor',
            'category_id' => 'digital',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'luz e sombra',
            'category_id' => 'digital',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'software',
            'category_id' => 'digital',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'hardware',
            'category_id' => 'digital',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'modelagem 3D',
            'category_id' => 'digital',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'outros digital',
            'category_id' => 'digital',
        ]);
        //animação-> tradicional, 2D digital, 3D, stop motion, pixel, rotoscopia, motion graphics, outros
        DB::table('subcategories')->insert([
            'id' => 'tradicional',
            'category_id' => 'animação',
        ]);
        DB::table('subcategories')->insert([
            'id' => '2D digital',
            'category_id' => 'animação',
        ]);
        DB::table('subcategories')->insert([
            'id' => '3D',
            'category_id' => 'animação',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'stop motion',
            'category_id' => 'animação',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'pixel',
            'category_id' => 'animação',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'rotoscopia',
            'category_id' => 'animação',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'motion graphics',
            'category_id' => 'animação',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'outros animação',
            'category_id' => 'animação',
        ]);
        //história-> arte na antiguidade, arte medieval, arte renascentista, arte barroca, arte do século 18, arte do século 19, arte do século 20, outros história
        DB::table('subcategories')->insert([
            'id' => 'arte na antiguidade',
            'category_id' => 'história',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'arte medieval',
            'category_id' => 'história',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'arte renascentista',
            'category_id' => 'história',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'arte barroca',
            'category_id' => 'história',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'arte do século 18',
            'category_id' => 'história',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'arte do século 19',
            'category_id' => 'história',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'arte do século 20',
            'category_id' => 'história',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'outros história',
            'category_id' => 'história',
        ]);
        //áudio e visual-> cinematografia, cenografia, áudio, edição de foto e vídeo, cinema, televisão, internet, outros áudio e visual
        DB::table('subcategories')->insert([
            'id' => 'cinematografia',
            'category_id' => 'áudio e visual',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'cenografia',
            'category_id' => 'áudio e visual',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'áudio',
            'category_id' => 'áudio e visual',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'edição de foto e vídeo',
            'category_id' => 'áudio e visual',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'cinema',
            'category_id' => 'áudio e visual',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'televisão',
            'category_id' => 'áudio e visual',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'internet',
            'category_id' => 'áudio e visual',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'outros áudio e visual',
            'category_id' => 'áudio e visual',
        ]);
        //outros-> fotografia, moda, design, roteiro
        DB::table('subcategories')->insert([
            'id' => 'fotografia',
            'category_id' => 'outros',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'moda',
            'category_id' => 'outros',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'design',
            'category_id' => 'outros',
        ]);
        DB::table('subcategories')->insert([
            'id' => 'roteiro',
            'category_id' => 'outros',
        ]);

    }
}

//fundamentos-> forma, linha, perspectiva, anatomia, linhas, cor, composição, luz e sombra, outros
//desenho-> hqs, ilustração, estilo, outros
//tecnica-> grafite, pintura a óleo, gravura, aquarela, colagem, lápis de cor, giz de cera, guache, escultura,  outros
//digital-> pintura, cor, luz e sombra, software, hardware, modelagem 3D, outros
//animação-> tradicional, 2D digital, 3D, stop motion, pixel, rotoscopia, motion graphics, outros
//história-> arte na antiguidade, arte medieval, arte renascentista, arte barroca, arte do século 18, arte do século 19, arte do século 20
//áudio e visual-> cinematografia, cenografia, áudio, edição de foto e vídeo, cinema, televisão, internet, outros
//outros-> fotografia, moda, design, roteiro

        
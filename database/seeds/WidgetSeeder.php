<?php

use Illuminate\Database\Seeder;

class WidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('widgets')->insert([
            'name' => 'section',
            'code' => '<div>
            <!--Seção--><h1>
                {$text1}
            </h1>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'title',
            'code' => '<div>
            <!--Título-->
            <h3>{$text1}</h3>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image+desc+subtitle',
            'code' => '<div>
            <!--Imagem(alt)+descrição+subtítulo-->
            <h5>{$text1}</h5>
            <img alt="{$alt1}" src="{$src1}">
            <P>{$text2}</P>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image+desc',
            'code' => ' <div>
            <!--Imagem(alt)+descrição-->
            <img alt="{$alt2}" src="{$src1}">
            <P>{$text1}</P>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image+subtitle',
            'code' => '  <div>
            <!--Imagem(alt)+subtítulo-->
            <h5>{$text1}</h5>
            <img alt="{$alt1}" src="{$src1}">
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image',
            'code' => '<div>
            <!--Imagem(alt)-->
            <img alt="{$alt1}" src="{$src1}">
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'text+subtitle',
            'code' => '<div>
            <!--Texto+subtítulo--><h5>{$text1}</h5><p>{$text2}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'text',
            'code' => '<div>
            <!--Texto-->
            <p>{$text1}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video+desc+subtitle',
            'code' => ' <div>
            <!--Video+descrição+subtítulo-->
            <h5>{$text1}</h5>
            <video width="320" controls>
                <source src="{$src1}" type="video/mp4">
              </video>
            <p>{$text2}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video+desc',
            'code' => '<div>
            <!--Video+descrição-->
            <video width="320" controls>
                <source src="{$src1}" type="video/mp4">
              </video>
            <p>{$text1}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video+subtitle',
            'code' => '<div>
            <!--Video+subtítulo-->
            <h5>{$text1}</h5>
            <video width="320" controls>
                <source src="{$src1}" type="video/mp4">
              </video>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video',
            'code' => '<div>
            <!--Video-->
            <video width="320" controls>
                <source src="{$src1}" type="video/mp4">
              </video>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio+desc+subtitle',
            'code' => '<div>
            <!--Áudio+Descrição+subtítulo-->
    
            <h5>{$text1}</h5>
            <audio controls>
                <source src="{$src1}" type="audio/mpeg">
              </audio>
            <p>{$text2}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio+desc',
            'code' => '<div>
            <!--Áudio+Descrição-->
            <audio controls>
                    <source src="{$src1}" type="audio/mpeg">
                  </audio>
            <p>{$text1}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio+subtitle',
            'code' => ' <div>
            <!--áudio+subtítulo-->
            <h5>{$text1}</h5>
            <audio controls>
                <source src="{$src1}" type="audio/mpeg">
              </audio>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio',
            'code' => ' <div>
            <!--áudio-->
            <audio controls>
                <source src="{$src1}" type="audio/mpeg">
              </audio>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'exercises(section)',
            'code' => '<div>
            <!--Excs propostos (Seção)-->
            <h1>Exercícios propostos</h1>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'exercises(title)',
            'code' => '<div>
            <!--Excs propostos (Título)-->
            <h3>Exercícios propostos</h3>
        </div>',
        ]);
    }
}

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
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Seção--><h1 style="margin-top: 10px; margin-bottom: 10px;">{$text1}</h1></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'title',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Título--><h3 style="margin-top: 10px; margin-bottom: 10px;">{$text1}</h3></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image+desc+subtitle',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Imagem(alt)+descrição+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><img style="margin-top: 10px; max-width: 400px; max-height: 400px " class="rounded img-fluid" alt="{$alt1}" src="{$src1}"><hr class="divider"><P style="margin-top: 10px; margin-bottom: 10px;">{$text2}</P></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image+subtitle',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Imagem(alt)+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><img style="margin-top: 10px; margin-bottom: 10px; max-width: 400px; max-height: 400px" class="rounded img-fluid" alt="{$alt1}" src="{{$src1}}"></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image+desc',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Imagem(alt)+descrição--><img style="margin-top: 10px; max-width: 400px; max-height: 400px" class="rounded img-fluid" alt="{$alt2}" src="{$src1}"><hr class="divider"><P style="margin-top: 10px; margin-bottom: 10px;">{$text1}</P></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Imagem(alt)--><img style="margin-top: 10px; margin-bottom: 10px; max-width: 400px; max-height: 400px" class="rounded img-fluid" alt="{$alt1}" src="{$src1}"></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'text+subtitle',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Texto+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text2}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'text',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"></divclass><!--Texto--><p style="margin-top: 10px; margin-bottom: 10px;">{$text1}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video+desc+subtitle',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Video+descrição+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><video style="margin-top: 10px; " class="rounded" width="320" controls><source src="{$src1}" type="video/mp4"></video><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text2}</p>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video+desc',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Video+descrição--><video style="margin-top: 10px; " class="rounded" width="320" controls><source src="{$src1}" type="video/mp4"></video><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text1}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video+subtitle',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Video+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><video style="margin-top: 10px; margin-bottom: 10px;" class="rounded" width="320" controls><source src="{src1}" type="video/mp4"></video></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Video--><video style="margin-top: 10px; margin-bottom: 10px;" class="rounded" width="320" controls><source src="{$src1}" type="video/mp4"></video></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio+desc+subtitle',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Áudio+Descrição+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><audio style="margin-top: 10px; " controls><source src="{$src1}" type="audio/mpeg"></audio><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text2}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio+desc',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Áudio+Descrição--><audio controls style="margin-top: 10px; "><source src="{$src1}" type="audio/mpeg"></audio><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text1}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio+subtitle',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--áudio+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><audio style="margin-top: 10px; margin-bottom: 10px;" controls><source src="{$src1}" type="audio/mpeg"></audio></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--áudio--><audio style="margin-top: 10px; margin-bottom: 10px;" controls><source src="{$src1}" type="audio/mpeg"></audio></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'exercises(section)',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Excs propostos (Seção)--><h1 style="margin-top: 10px; margin-bottom: 10px;">Exercícios propostos</h1></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'exercises(title)',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Excs propostos (Título)--><h3 style="margin-top: 10px; margin-bottom: 10px;">Exercícios propostos</h3></div><hr>',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class WidgetSeeder extends Seeder
{
    public function run()
    {
        DB::table('widgets')->insert([
            'name' => 'Seção',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Seção--><h1 style="margin-top: 10px; margin-bottom: 10px;">{$text1}</h1></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Título',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Título--><h3 style="margin-top: 10px; margin-bottom: 10px;">{$text1}</h3></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Imagem + descrição + subtítulo',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Imagem(alt)+descrição+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><img style="margin-top: 10px; max-width: 400px; max-height: 400px " class="rounded img-fluid" alt="{$alt1}" src="{$src1}"><hr class="divider"><P style="margin-top: 10px; margin-bottom: 10px;">{$text2}</P></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Imagem + subtítulo',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Imagem(alt)+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><img style="margin-top: 10px; margin-bottom: 10px; max-width: 400px; max-height: 400px" class="rounded img-fluid" alt="{$alt1}" src="{$src1}"></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Imagem + descrição',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Imagem(alt)+descrição--><img style="margin-top: 10px; max-width: 400px; max-height: 400px" class="rounded img-fluid" alt="{$alt2}" src="{$src1}"><hr class="divider"><P style="margin-top: 10px; margin-bottom: 10px;">{$text1}</P></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Imagem',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Imagem(alt)--><img style="margin-top: 10px; margin-bottom: 10px; max-width: 400px; max-height: 400px" class="rounded img-fluid" alt="{$alt1}" src="{$src1}"></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Texto + subtítulo',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Texto+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text2}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Texto',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"></divclass><!--Texto--><p style="margin-top: 10px; margin-bottom: 10px;">{$text1}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Vídeo + descrição + subtítulo',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Video+descrição+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><video style="margin-top: 10px; " class="rounded" width="320" controls><source src="{$src1}" type="video/mp4"></video><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text2}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Vídeo + descrição',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Video+descrição--><video style="margin-top: 10px; " class="rounded" width="320" controls><source src="{$src1}" type="video/mp4"></video><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text1}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Vídeo + subtítulo',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Video+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><video style="margin-top: 10px; margin-bottom: 10px;" class="rounded" width="320" controls><source src="{src1}" type="video/mp4"></video></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Video',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Video--><video style="margin-top: 10px; margin-bottom: 10px;" class="rounded" width="320" controls><source src="{$src1}" type="video/mp4"></video></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Audio + descrição + subtitulo',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Áudio+Descrição+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><audio style="margin-top: 10px; " controls><source src="{$src1}" type="audio/mpeg"></audio><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text2}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Audio + descrição',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Áudio+Descrição--><audio controls style="margin-top: 10px; "><source src="{$src1}" type="audio/mpeg"></audio><hr class="divider"><p style="margin-top: 10px; margin-bottom: 10px;">{$text1}</p></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Audio + subtitulo',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--áudio+subtítulo--><h5 style="margin-top: 10px; ">{$text1}</h5><hr class="divider"><audio style="margin-top: 10px; margin-bottom: 10px;" controls><source src="{$src1}" type="audio/mpeg"></audio></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Audio',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--áudio--><audio style="margin-top: 10px; margin-bottom: 10px;" controls><source src="{$src1}" type="audio/mpeg"></audio></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Seção de exercícios',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Excs propostos (Seção)--><h1 style="margin-top: 10px; margin-bottom: 10px;">Exercícios propostos</h1></div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'Título de exercícios',
            'code' => '<div class="container text-white rounded-3" style="background-color: rgb(24, 24, 24);"><!--Excs propostos (Título)--><h3 style="margin-top: 10px; margin-bottom: 10px;">Exercícios propostos</h3></div><hr>',
        ]);
    }
}

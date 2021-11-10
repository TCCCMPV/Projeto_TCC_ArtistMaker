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
            <!--Seção-->
            <h1>
                {{$text}}
            </h1>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'title',
            'code' => '<div>
            <!--Título-->
            <h3>{{$text}}</h3>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image+desc+subtitle',
            'code' => '<div>
            <!--Imagem(alt)+descrição+subtítulo-->
            <h5>{{$text}}</h5>
            <img alt="{{$alt}}" src="{{$src}}">
            <P>{{$text2}}</P>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image+desc',
            'code' => ' <div>
            <!--Imagem(alt)+descrição-->
            <img alt="{{$alt}}" src="{{$src}}">
            <P>{{$text}}</P>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image+subtitle',
            'code' => '  <div>
            <!--Imagem(alt)+subtítulo-->
            <h5>{{$text}}</h5>
            <img alt="{{$alt}}" src="{{$src}}">
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'image',
            'code' => '<div>
            <!--Imagem(alt)-->
            <img alt="{{$alt}}" src="{{$src}}">
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'text+subtitle',
            'code' => '<div>
            <!--Texto+subtítulo-->
            <h5>{{$text}}</h5>
            <p>{{$text2}}</p>
        </div>0',
        ]);
        DB::table('widgets')->insert([
            'name' => 'text',
            'code' => '<div>
            <!--Texto-->
            <p>{{$text}}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video+desc+subtitle',
            'code' => ' <div>
            <!--Video+descrição+subtítulo-->
            <h5>{{$text}}</h5>
            <video width="320" controls>
                <source src="{{$src}}" type="video/mp4">
              </video>
            <p>{{$text2}}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video+desc',
            'code' => '<div>
            <!--Video+descrição-->
            <video width="320" controls>
                <source src="{{$src}}" type="video/mp4">
              </video>
            <p>{{$text}}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video+subtitle',
            'code' => '<div>
            <!--Video+subtítulo-->
            <h5>{{$text}}</h5>
            <video width="320" controls>
                <source src="{{$src}}" type="video/mp4">
              </video>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'video',
            'code' => '<div>
            <!--Video-->
            <video width="320" controls>
                <source src="{{$src}}" type="video/mp4">
              </video>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio+desc+subtitle',
            'code' => '<div>
            <!--Áudio+Descrição+subtítulo-->
    
            <h5>{{$text}}</h5>
            <audio controls>
                <source src="{{$src}}" type="audio/mpeg">
              </audio>
            <p>{{$text2}}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio+desc',
            'code' => '<div>
            <!--Áudio+Descrição-->
            <audio controls>
                    <source src="{{$src}}" type="audio/mpeg">
                  </audio>
            <p>{{$text}}</p>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio+subtitle',
            'code' => ' <div>
            <!--áudio+subtítulo-->
            <h5>{{$text}}</h5>
            <audio controls>
                <source src="{{$src}}" type="audio/mpeg">
              </audio>
        </div>',
        ]);
        DB::table('widgets')->insert([
            'name' => 'audio',
            'code' => ' <div>
            <!--áudio-->
            <audio controls>
                <source src="{{$src}}" type="audio/mpeg">
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

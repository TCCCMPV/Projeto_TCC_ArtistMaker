<?php

use Illuminate\Database\Seeder;

class ContentTypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('content_types')->insert([
            'id' => 'course'
        ]);
        DB::table('content_types')->insert([
            'id' => 'module'
        ]);
        DB::table('content_types')->insert([
            'id' => 'tutorial'
        ]);
        DB::table('content_types')->insert([
            'id' => 'course_module'
        ]);
    }
}

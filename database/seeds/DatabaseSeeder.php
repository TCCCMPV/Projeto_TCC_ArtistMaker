<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ContentTypeSeeder::class);
        $this->call(WidgetSeeder::class);

        factory(App\User::class, 10)->create();
        factory(App\Content::class, 10)->create();
    }
}

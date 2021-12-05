<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->string('id');
            $table->string('category_id')->references('id')->on('categories');
        });
    }
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}

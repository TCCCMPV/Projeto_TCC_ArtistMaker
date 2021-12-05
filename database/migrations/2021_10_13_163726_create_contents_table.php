<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->longText('tags')->nullable();
            $table->string('name',100);
            $table->string('description',500)->nullable();
            $table->string('thumbnail',500)->default('default/UnknownUser.png');
            $table->string('language',60)->default('pt-br');
            $table->integer('qualification_level')->nullable();
            $table->string('subcategory_id')->references('id')->on('subcategories')->nullable();
            $table->string('content_type_id')->references('id')->on('content_types')->nullable();
            $table->integer('position')->nullable();
            $table->foreignId('content_id')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}

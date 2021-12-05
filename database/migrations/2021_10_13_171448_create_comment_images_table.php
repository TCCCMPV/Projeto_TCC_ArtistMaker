<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentImagesTable extends Migration
{
    public function up()
    {
        Schema::create('comment_images', function (Blueprint $table) {
            $table->id();
            $table->string('image',500);
            $table->foreignId('comment_id');
        });
    }
    public function down()
    {
        Schema::dropIfExists('comment_images');
    }
}

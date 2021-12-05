<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalkImagesTable extends Migration
{
    public function up()
    {
        Schema::create('talk_images', function (Blueprint $table) {
            $table->id();
            $table->string('image',500);
            $table->foreignId('user_talks_user_id');
        });
    }
    public function down()
    {
        Schema::dropIfExists('talk_images');
    }
}

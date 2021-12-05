<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('content_id');
            $table->text('legend')->nullable();
            $table->integer('position');
        });
    }
    public function down()
    {
        Schema::dropIfExists('images');
    }
}

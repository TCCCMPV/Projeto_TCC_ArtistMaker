<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLikesDrawingsTable extends Migration
{
    public function up()
    {
        Schema::create('user_likes_drawings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('drawing_id');
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_likes_drawings');
    }
}

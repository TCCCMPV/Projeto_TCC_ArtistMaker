<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserListsContentsTable extends Migration
{
    public function up()
    {
        Schema::create('user_lists_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('content_id');
            $table->integer('position');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_lists_contents');
    }
    
}

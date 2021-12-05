<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFollowsUsersTable extends Migration
{
    public function up()
    {
        Schema::create('user_follows_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('followed_id')->references('id')->on('users');
            $table->foreignId('follow_id')->references('id')->on('users');

        });
    }
    public function down()
    {
        Schema::dropIfExists('user_follows_users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBlocksUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_blocks_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blocker_id')->references('id')->on('users');;
            $table->foreignId('blocked_id')->references('id')->on('users');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_blocks_users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTalksUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_talks_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->references('id')->on('users');
            $table->foreignId('receiver_id')->references('id')->on('users');
            $table->string('message',1500);
            $table->boolean('sender_deleted')->default(false);
            $table->boolean('receiver_deleted')->default(false);
            $table->boolean('seen')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_talks_users');
    }
}

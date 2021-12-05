<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('notification_type_id')->references('id')->on('notification_types');
            $table->foreignId('user_id');
            $table->text('message');
            $table->boolean('seen')->default(false);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}

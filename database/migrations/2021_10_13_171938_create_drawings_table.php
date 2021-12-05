<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrawingsTable extends Migration
{
    public function up()
    {
        Schema::create('drawings', function (Blueprint $table) {
            $table->id();
            $table->string('image',500);
            $table->foreignId('user_id');
            $table->boolean('public')->default(true);
            $table->boolean('show_likes')->default(true);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('drawings');
    }
}

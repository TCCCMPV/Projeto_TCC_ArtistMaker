<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserViewsContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_views_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('content_id');
            $table->dateTime('visualization');
            $table->boolean('completed')->default(false);
            $table->boolean('deleted')->default(false);
        });
    }
//visualization, completed
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_views_contents');
    }
}

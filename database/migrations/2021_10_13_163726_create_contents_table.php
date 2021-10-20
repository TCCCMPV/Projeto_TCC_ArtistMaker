<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->longText('tags')->nullable();
            $table->string('name',100);
            $table->string('description',500);
            $table->string('thumbnail',500);
            $table->string('language',60)->default('pt-br');
            $table->integer('qualification_level');
            $table->foreignId('subcategory_id');
            $table->string('content_type_id')->references('id')->on('content_types');
            $table->integer('position')->nullable();
            $table->foreignId('content_id')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}

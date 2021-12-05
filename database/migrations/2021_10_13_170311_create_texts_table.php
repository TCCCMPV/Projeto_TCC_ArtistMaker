<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextsTable extends Migration
{
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->string('text',500);
            $table->foreignId('content_id');
            $table->integer('position');
        });
    }
    public function down()
    {
        Schema::dropIfExists('texts');
    }
}

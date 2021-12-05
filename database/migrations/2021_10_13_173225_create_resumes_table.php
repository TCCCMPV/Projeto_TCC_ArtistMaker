<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('description',500);
            $table->string('archive',500);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}

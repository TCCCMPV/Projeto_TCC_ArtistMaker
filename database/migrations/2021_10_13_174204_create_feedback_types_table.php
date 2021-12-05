<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTypesTable extends Migration
{
    public function up()
    {
        Schema::create('feedback_types', function (Blueprint $table) {
            $table->string('id')->unique();
        });
    }
    public function down()
    {
        Schema::dropIfExists('feedback_types');
    }
}

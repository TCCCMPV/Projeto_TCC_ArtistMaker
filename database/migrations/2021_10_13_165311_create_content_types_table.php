<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTypesTable extends Migration
{
    public function up()
    {
        Schema::create('content_types', function (Blueprint $table) {
            $table->string('id')->unique();
        });
    }
    public function down()
    {
        Schema::dropIfExists('content_types');
    }
}

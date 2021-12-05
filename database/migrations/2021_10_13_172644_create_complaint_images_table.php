<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintImagesTable extends Migration
{
    public function up()
    {
        Schema::create('complaint_images', function (Blueprint $table) {
            $table->id();
            $table->string('image',500);
            $table->foreignId('complaint_id');
        });
    }
    public function down()
    {
        Schema::dropIfExists('complaint_images');
    }
}

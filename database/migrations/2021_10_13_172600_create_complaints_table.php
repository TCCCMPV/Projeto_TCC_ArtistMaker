<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('reported_object')->nullable();
            $table->string('complaint_type_id')->references('id')->on('complaint_types');
            $table->longText('description');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}

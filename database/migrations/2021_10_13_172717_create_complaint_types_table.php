<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintTypesTable extends Migration
{
    public function up()
    {
        Schema::create('complaint_types', function (Blueprint $table) {
            $table->string('id')->unique();
        });
    }
    public function down()
    {
        Schema::dropIfExists('complaint_types');
    }
}

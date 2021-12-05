<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRatesContentsTable extends Migration
{
    public function up()
    {
        Schema::create('user_rates_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('content_id');
            $table->float('avaliation',1,1);
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_rates_contents');
    }
}

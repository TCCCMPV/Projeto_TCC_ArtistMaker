<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentHasWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_has_widgets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('widget_id');
            $table->foreignId('content_id');
            $table->integer('position');
            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
            $table->string('text3')->nullable();
            $table->string('alt1')->nullable();
            $table->string('alt2')->nullable();
            $table->string('alt3')->nullable();
            $table->string('src1')->nullable();
            $table->string('src2')->nullable();
            $table->string('src3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_has_widgets');
    }
}

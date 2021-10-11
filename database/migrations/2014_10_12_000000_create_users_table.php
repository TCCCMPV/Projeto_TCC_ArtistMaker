<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nick');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('picture')->default('storage\default\profile.png');
            $table->string('local')->default('Brazil');
            $table->string('language')->default('pt-br');
            $table->integer('level')->default('99');
            $table->dateTime('suspension_beginning')->nullable();//criado_em e atualizado_em
            $table->dateTime('suspension_end')->nullable();//criado_em e atualizado_em
            $table->softDeletes();
            $table->float('rate',1,1)->nullable();
            $table->boolean('verified')->default(false);
            $table->boolean('especialist')->default(false);
            $table->dateTime('birth');
            $table->longText('bio')->nullable();
            $table->dateTime('email_verified_at')->nullable();//criado_em e atualizado_em
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
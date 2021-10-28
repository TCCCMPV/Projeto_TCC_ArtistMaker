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
            $table->string('nick',20);//varchar
            $table->string('full_name',70);
            $table->string('email',150)->unique();//único
            $table->string('password',100);
            $table->string('picture',500)->default('/default/UnknownUser.png');//padrão
            $table->string('local',30)->default('Brazil');
            $table->string('language',60)->default('pt-br');
            $table->integer('level')->default('99');//int
            $table->dateTime('suspension_beginning')->nullable();
            $table->dateTime('suspension_end')->nullable();//oposto ao not null
            $table->softDeletes();
            $table->float('rate')->nullable();//caracteres antes,depois da virgula
            $table->boolean('verified')->default(false);//verdadeiro ou falso
            $table->boolean('especialist')->default(false);
            $table->date('birth')->nullable();
            $table->longText('bio')->nullable();//muitos caracteres
            $table->dateTime('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    //$table->foreignId('user_id');
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
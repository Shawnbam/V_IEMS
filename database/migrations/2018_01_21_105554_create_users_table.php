<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->rememberToken();
            $table->string('roll');
            $table->string('dept');
            $table->integer('phone')->nullable()	;
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type');
            $table->string('tags');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('fb');
            $table->string('github');
            $table->string('img');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plikes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
//            $table->integer('user_id');
//            $table->integer('post_id');
            $table->boolean('like');

            $table->integer('post_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::table('plikes', function ($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plikes');
    }
}

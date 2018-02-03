<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcomments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('comment');
            $table->string('name');
            $table->boolean('approved');

            $table->integer('post_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::table('pcomments', function ($table){
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
        Schema::dropIfExists('pcomments');
//        Schema::dropForeign('post_id');
//        Schema::dropForeign('user_id');
    }
}

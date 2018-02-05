<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePclikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pclikes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('like');

            $table->integer('pcomment_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::table('pclikes', function ($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('pcomment_id')->references('id')->on('pcomments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pclikes');
    }
}

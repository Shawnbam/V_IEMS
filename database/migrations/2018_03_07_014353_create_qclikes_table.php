<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQclikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qclikes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('like');

            $table->integer('qcomment_id')->unsigned();
            $table->integer('query_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::table('qclikes', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('query_id')->references('id')->on('queries')->onDelete('cascade');
            $table->foreign('qcomment_id')->references('id')->on('qcomments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qclikes');
    }
}

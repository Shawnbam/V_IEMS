<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qcomments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('comment');
            $table->string('name');
            $table->boolean('approved');
            $table->integer('qclikecnt');
            $table->integer('qcdislikecnt');

            $table->integer('query_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::table('qcomments',function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('query_id')->references('id')->on('queries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qcomments');
    }
}

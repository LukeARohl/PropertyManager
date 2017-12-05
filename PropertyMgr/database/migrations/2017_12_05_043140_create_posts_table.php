<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
	    $table->date('start_date');
	    $table->date('end_date');
	    $table->integer('prop_id');
	    $table->string('message');

	    $table->foreign('prop_id')->references('properties')->on('id');
            $table->timestamps();
        });
	
	$post = new \App\Post;
	$start_date = new DateTime("2017-01-01");
	$end_date = new DateTime("2018-12-15");
	$post->start_date = $start_date;
	$post->end_date = $end_date;
	$post->prop_id = 1;
	$post->message = "BumShit";
	$post->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

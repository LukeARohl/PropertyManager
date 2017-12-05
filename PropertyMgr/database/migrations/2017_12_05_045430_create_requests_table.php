<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('unit_id');
	    $table->integer('requester_id');
	    $table->string('message');
	    
	    $table->foreign('unit_id')->references('units')->on('id');
	    $table->foreign('requester_id')->references('users')->on('id');
            $table->timestamps();
        });

	$request = new \App\Request;
	$request->unit_id = 4;
	$request->requester_id = 1;
	$request->message = "It's flooded yo!";
	$request->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}

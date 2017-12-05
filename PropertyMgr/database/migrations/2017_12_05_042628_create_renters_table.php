<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renters', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('user_id');
	    $table->integer('unit_id');

	    $table->foreign('user_id')->references('id')->on('user');
	    $table->foreign('unit_id')->references('id')->on('unit');
            $table->timestamps();
        });


	$renter = new \App\Renter;
	$renter->user_id = 2;
	$renter->unit_id = 1;
	$renter->save();

	$renter = new \App\Renter;
	$renter->user_id = 3;
	$renter->unit_id = 1;
	$renter->save();

	$renter = new \App\Renter;
	$renter->user_id = 4;
	$renter->unit_id = 2;
	$renter->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renters');
    }
}

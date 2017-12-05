<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('address');
	    $table->integer('manager_id');

	    $table->foreign('manager_id')->references('managers')->on('id');
            $table->timestamps();
        });

	$prop = new \App\Property;
	$prop->address = "245 Test Drive Ames, IA, 50014";
	$prop->manager_id = 1;
	$prop->save();

	$prop = new \App\Property;
	$prop->address = "1300 Test Lane Ames, IA, 50014";
	$prop->manager_id = 1;
	$prop->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('prop_id');

	    $table->foreign('prop_id')->references('properties')->on('id');
            $table->timestamps();
        });

	$unit = new \App\Unit;
	$unit->prop_id = 1;
	$unit->save();

	$unit = new \App\Unit;
	$unit->prop_id = 1;
	$unit->save();

	$unit = new \App\Unit;
	$unit->prop_id = 2;
	$unit->save();

	$unit = new \App\Unit;
	$unit->prop_id = 2;
	$unit->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}

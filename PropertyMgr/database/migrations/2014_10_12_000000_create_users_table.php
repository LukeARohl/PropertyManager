<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
	    $table->string('phone');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

	$mgr = new \App\User;
	$mgr->email = "mgr@property.com";
	$mgr->phone = "515-555-5555";
	$mgr->name = "John Doe";
	$mgr->password = "FooBar";
	$mgr->save();

	$staff = new \App\User;
	$staff->email = "staff@property.com";
	$staff->phone = "515-555-1234";
	$staff->name = "Mary Jane Doe";
	$staff->password = "FooBar";
	$staff->save();
	
	$usr = new \App\User;
	$usr->email = "Luke@gmail.com";
	$usr->phone = "515-555-4321";
	$usr->name = "Luke Rohl";
	$usr->password = "FooBar";
	$usr->save();

	$usr = new \App\User;
	$usr->email = "Keith@gmail.com";
	$usr->phone = "515-555-1458";
	$usr->name = "Keith Snider";
	$usr->password = "FooBar";
	$usr->save();

	$usr = new \App\User;
	$usr->email = "Bob@gmail.com";
	$usr->phone = "515-555-7878";
	$usr->name = "Bob Anderson";
	$usr->password = "FooBar";
	$usr->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->integer('userExp');
            
            //=== Bush/woodlands ===//
            $table->integer('wallabyExp');
            $table->integer('koalaExp');
            $table->integer('wombatExp');
            
            //=== Rainforest ===//
            $table->integer('platypusExp');
            $table->integer('cassowaryExp');
            $table->integer('frogExp');
            
            //=== Ocean ===//
            $table->integer('whaleExp');
            $table->integer('turtleExp');
            $table->integer('sharkExp');
            
            //=== Desert ===//
            $table->integer('bilbyExp');
            $table->integer('kangarooExp');
            
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

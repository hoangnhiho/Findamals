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
            $table->integer('userExp')->default(0);
            
            //=== Bush/woodlands ===//
            $table->integer('wallabyExp')->default(0);
            $table->integer('koalaExp')->default(0);
            $table->integer('wombatExp')->default(0);
            $table->integer('cockatooExp')->default(0);
            
            //=== Rainforest ===//
            $table->integer('platypusExp')->default(0);
            $table->integer('cassowaryExp')->default(0);
            $table->integer('frogExp')->default(0);
            
            //=== Ocean ===//
            $table->integer('whaleExp')->default(0);
            $table->integer('turtleExp')->default(0);
            $table->integer('sharkExp')->default(0);
            
            //=== Desert ===//
            $table->integer('bilbyExp')->default(0);
            $table->integer('kangarooExp')->default(0);
            
			$table->rememberToken();
			// $table->timestamps();
			$table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));

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

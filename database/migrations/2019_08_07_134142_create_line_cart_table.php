<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLineCartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('line_cart', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('post_id');
			$table->integer('user_id');
			$table->integer('cart_id');
			$table->integer('total');
			$table->integer('quantity');
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
		Schema::drop('line_cart');
	}

}

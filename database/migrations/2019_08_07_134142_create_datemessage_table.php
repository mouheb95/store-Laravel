<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatemessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datemessage', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date_envoi_message');
			$table->date('date_lecture_message');
			$table->integer('user_id');
			$table->integer('message_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('datemessage');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInteragitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interagit', function(Blueprint $table)
		{
			$table->integer('id_photos');
			$table->integer('id_users')->index('interagit_Users0_FK');
			$table->primary(['id_photos','id_users']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('interagit');
	}

}

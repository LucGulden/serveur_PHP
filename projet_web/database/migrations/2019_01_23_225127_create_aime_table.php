<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aime', function(Blueprint $table)
		{
			$table->integer('id_idee');
			$table->integer('id_users')->index('aime_Users0_FK');
			$table->primary(['id_idee','id_users']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aime');
	}

}

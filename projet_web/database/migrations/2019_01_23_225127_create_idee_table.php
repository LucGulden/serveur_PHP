<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('idee', function(Blueprint $table)
		{
			$table->integer('id_idee', true);
			$table->string('titre_idee', 50);
			$table->text('description_idee', 65535);
			$table->integer('id_users')->index('idee_Users_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('idee');
	}

}

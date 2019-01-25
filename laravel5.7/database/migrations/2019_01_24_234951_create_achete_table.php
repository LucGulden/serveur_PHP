<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcheteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('achete', function(Blueprint $table)
		{
			$table->integer('id_commande');
			$table->integer('id_users')->index('achete_Users0_FK');
			$table->primary(['id_commande','id_users']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('achete');
	}

}

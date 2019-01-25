<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participe', function(Blueprint $table)
		{
			$table->integer('id_users');
			$table->integer('id_event')->index('participe_event0_FK');
			$table->primary(['id_users','id_event']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participe');
	}

}

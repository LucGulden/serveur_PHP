<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRepresenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('represente', function(Blueprint $table)
		{
			$table->integer('id_photos');
			$table->integer('id_events')->index('represente_events0_FK');
			$table->primary(['id_photos','id_events']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('represente');
	}

}

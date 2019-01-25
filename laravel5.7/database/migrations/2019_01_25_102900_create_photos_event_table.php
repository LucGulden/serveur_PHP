<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos_event', function(Blueprint $table)
		{
			$table->integer('id_photos', true);
			$table->string('chemin_photos', 100);
			$table->integer('id_users')->index('photos_event_Users_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photos_event');
	}

}

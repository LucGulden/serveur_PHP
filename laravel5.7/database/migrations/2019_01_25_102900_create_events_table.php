<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->integer('id_events', true);
			$table->string('nom_events', 50);
			$table->text('description_events', 65535);
			$table->string('image_events', 100);
			$table->integer('nbrparticipants_events');
			$table->float('prix_events', 10, 0);
			$table->date('date_events');
			$table->integer('id_recurrence')->nullable()->index('events_recurrence_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}

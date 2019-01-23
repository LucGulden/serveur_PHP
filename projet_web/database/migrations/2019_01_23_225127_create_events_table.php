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
			$table->integer('id_event', true);
			$table->string('nom_event', 50);
			$table->text('description_event', 65535);
			$table->string('image_event', 100);
			$table->integer('nbrparticipants_event');
			$table->decimal('prix_event', 15, 3);
			$table->date('date_event');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInspireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inspire', function(Blueprint $table)
		{
			$table->foreign('id_events', 'inspire_events_FK')->references('id_events')->on('events')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_idee', 'inspire_idee0_FK')->references('id_idee')->on('idee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inspire', function(Blueprint $table)
		{
			$table->dropForeign('inspire_events_FK');
			$table->dropForeign('inspire_idee0_FK');
		});
	}

}

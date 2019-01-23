<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRepresenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('represente', function(Blueprint $table)
		{
			$table->foreign('id_event', 'represente_event0_FK')->references('id_event')->on('events')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_photos', 'represente_photos_event_FK')->references('id_photos')->on('photos_event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('represente', function(Blueprint $table)
		{
			$table->dropForeign('represente_event0_FK');
			$table->dropForeign('represente_photos_event_FK');
		});
	}

}

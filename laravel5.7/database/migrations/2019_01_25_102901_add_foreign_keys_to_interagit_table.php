<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInteragitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('interagit', function(Blueprint $table)
		{
			$table->foreign('id_users', 'interagit_Users0_FK')->references('id_users')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_photos', 'interagit_photos_event_FK')->references('id_photos')->on('photos_event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('interagit', function(Blueprint $table)
		{
			$table->dropForeign('interagit_Users0_FK');
			$table->dropForeign('interagit_photos_event_FK');
		});
	}

}

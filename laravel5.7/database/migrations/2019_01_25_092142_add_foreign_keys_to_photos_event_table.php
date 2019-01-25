<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPhotosEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('photos_event', function(Blueprint $table)
		{
			$table->foreign('id_users', 'photos_event_Users_FK')->references('id_users')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('photos_event', function(Blueprint $table)
		{
			$table->dropForeign('photos_event_Users_FK');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParticipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('participe', function(Blueprint $table)
		{
			$table->foreign('id_users', 'participe_Users_FK')->references('id_users')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_event', 'participe_event0_FK')->references('id_event')->on('events')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('participe', function(Blueprint $table)
		{
			$table->dropForeign('participe_Users_FK');
			$table->dropForeign('participe_event0_FK');
		});
	}

}

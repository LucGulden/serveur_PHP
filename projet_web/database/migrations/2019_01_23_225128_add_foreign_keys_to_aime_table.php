<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aime', function(Blueprint $table)
		{
			$table->foreign('id_users', 'aime_Users0_FK')->references('id_users')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_idee', 'aime_idee_FK')->references('id_idee')->on('idee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('aime', function(Blueprint $table)
		{
			$table->dropForeign('aime_Users0_FK');
			$table->dropForeign('aime_idee_FK');
		});
	}

}

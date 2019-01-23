<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIdeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('idee', function(Blueprint $table)
		{
			$table->foreign('id_users', 'idee_Users_FK')->references('id_users')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('idee', function(Blueprint $table)
		{
			$table->dropForeign('idee_Users_FK');
		});
	}

}

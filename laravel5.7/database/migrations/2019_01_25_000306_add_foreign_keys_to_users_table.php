<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('mysql2')->table('users', function(Blueprint $table)
		{
			$table->foreign('id_centre', 'users_centre0_FK')->references('id_centre')->on('centre')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_role', 'users_role_FK')->references('id_role')->on('role')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('mysql2')->table('users', function(Blueprint $table)
		{
			$table->dropForeign('users_centre0_FK');
			$table->dropForeign('users_role_FK');
		});
	}

}

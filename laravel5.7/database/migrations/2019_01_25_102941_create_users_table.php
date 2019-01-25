<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('mysql2')->create('users', function(Blueprint $table)
		{
			$table->integer('id_users', true);
			$table->string('nom_users', 50);
			$table->string('prenom_users', 50);
			$table->string('mail_user', 50);
			$table->string('mdp_user', 50);
			$table->integer('id_role')->index('users_role_FK');
			$table->integer('id_centre')->index('users_centre0_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('mysql2')->drop('users');
	}

}

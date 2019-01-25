<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAcheteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('achete', function(Blueprint $table)
		{
			$table->foreign('id_users', 'achete_Users0_FK')->references('id_users')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_commande', 'achete_commande_FK')->references('id_commande')->on('commande')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('achete', function(Blueprint $table)
		{
			$table->dropForeign('achete_Users0_FK');
			$table->dropForeign('achete_commande_FK');
		});
	}

}

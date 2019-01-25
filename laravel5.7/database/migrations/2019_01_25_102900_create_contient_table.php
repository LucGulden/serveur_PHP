<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contient', function(Blueprint $table)
		{
			$table->integer('id_article');
			$table->integer('id_commande')->index('contient_commande0_FK');
			$table->integer('quantite');
			$table->primary(['id_article','id_commande']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contient');
	}

}

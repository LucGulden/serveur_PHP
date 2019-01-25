<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCorrespondTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('correspond', function(Blueprint $table)
		{
			$table->integer('id_categorie');
			$table->integer('id_article')->index('correspond_articles0_FK');
			$table->primary(['id_categorie','id_article']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('correspond');
	}

}

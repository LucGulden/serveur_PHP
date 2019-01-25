<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCorrespondTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('correspond', function(Blueprint $table)
		{
			$table->foreign('id_article', 'correspond_articles0_FK')->references('id_article')->on('articles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_categorie', 'correspond_categorie_FK')->references('id_categorie')->on('categorie')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('correspond', function(Blueprint $table)
		{
			$table->dropForeign('correspond_articles0_FK');
			$table->dropForeign('correspond_categorie_FK');
		});
	}

}

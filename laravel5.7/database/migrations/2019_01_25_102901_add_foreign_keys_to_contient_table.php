<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contient', function(Blueprint $table)
		{
			$table->foreign('id_article', 'contient_articles_FK')->references('id_article')->on('articles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_commande', 'contient_commande0_FK')->references('id_commande')->on('commande')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contient', function(Blueprint $table)
		{
			$table->dropForeign('contient_articles_FK');
			$table->dropForeign('contient_commande0_FK');
		});
	}

}

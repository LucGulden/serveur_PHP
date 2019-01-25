<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->integer('id_article', true);
			$table->string('nom_article', 50);
			$table->float('prix_article', 10, 0);
			$table->text('description_article', 65535);
			$table->integer('nbr_ventes_article');
			$table->integer('stock_article');
			$table->string('image_article');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}

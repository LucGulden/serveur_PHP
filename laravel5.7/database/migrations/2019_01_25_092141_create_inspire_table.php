<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInspireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inspire', function(Blueprint $table)
		{
			$table->integer('id_events');
			$table->integer('id_idee')->index('inspire_idee0_FK');
			$table->primary(['id_events','id_idee']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inspire');
	}

}

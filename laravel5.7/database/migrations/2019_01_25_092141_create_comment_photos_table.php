<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment_photos', function(Blueprint $table)
		{
			$table->integer('id_comm', true);
			$table->text('comment', 65535);
			$table->integer('id_photos')->index('comment_photos_photos_event_FK');
			$table->integer('id_users')->index('comment_photos_Users0_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comment_photos');
	}

}

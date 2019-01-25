<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommentPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comment_photos', function(Blueprint $table)
		{
			$table->foreign('id_users', 'comment_photos_Users0_FK')->references('id_users')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_photos', 'comment_photos_photos_event_FK')->references('id_photos')->on('photos_event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comment_photos', function(Blueprint $table)
		{
			$table->dropForeign('comment_photos_Users0_FK');
			$table->dropForeign('comment_photos_photos_event_FK');
		});
	}

}

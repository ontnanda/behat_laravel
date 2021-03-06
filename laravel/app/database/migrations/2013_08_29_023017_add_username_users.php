<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddUsernameUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
  public function up()
  {
  Schema::table('users', function(Blueprint $table)
  {
    $table->string('username');
  });
  }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    $table->dropColumn('username');
	}

}

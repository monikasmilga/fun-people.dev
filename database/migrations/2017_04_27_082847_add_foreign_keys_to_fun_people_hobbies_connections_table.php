<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFunPeopleHobbiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fun_people_hobbies_connections', function(Blueprint $table)
		{
			$table->foreign('hobby_id', 'fk_fun_people_hobbies_connections_fun_hobbies1')->references('id')->on('fun_hobbies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('people_id', 'fk_fun_people_hobbies_connections_fun_people1')->references('id')->on('fun_people')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fun_people_hobbies_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_fun_people_hobbies_connections_fun_hobbies1');
			$table->dropForeign('fk_fun_people_hobbies_connections_fun_people1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFunPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fun_people', function(Blueprint $table)
		{
			$table->foreign('city_id', 'fk_fun_people_fun_city')->references('id')->on('fun_city')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fun_people', function(Blueprint $table)
		{
			$table->dropForeign('fk_fun_people_fun_city');
		});
	}

}

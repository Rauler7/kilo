<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appliances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50);
			$table->string('standar_usages', 30);
			$table->string('avg_usages', 30);			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('appliances');
	}

}

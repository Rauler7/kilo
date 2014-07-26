<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('inquiries_id');
			$table->integer('appliances_id');
			$table->string('range_usages', 30);						
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
		Schema::drop('usages');
	}

}

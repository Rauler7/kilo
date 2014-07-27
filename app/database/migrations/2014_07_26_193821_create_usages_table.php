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
			$table->integer('inquiry_id');
			$table->integer('appliance_id');
			$table->integer('prom_usages');
			$table->decimal('range_usages', 5,3);						
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePruebaTable extends Migration {

	public function up()
	{
		Schema::create('prueba', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('prueba', 255);
		});
	}

	public function down()
	{
		Schema::drop('prueba');
	}
}
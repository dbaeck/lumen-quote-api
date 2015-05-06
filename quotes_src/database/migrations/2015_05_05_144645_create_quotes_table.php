<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table){
			$table->increments('id');
			$table->timestamps();	
			$table->string('name');
			$table->string('key');
			$table->text('description');
		});

		Schema::create('quotes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('text', 512);
            $table->string('author');
            $table->text('background');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quotes');
		Schema::drop('categories');
	}

}

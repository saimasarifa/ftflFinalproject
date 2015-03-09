<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatagoriesAndTasksTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catagories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Title')->default('');
			$table->string('created_by')->default('');
			$table->string('modified_by')->default('');
			$table->timestamps();
		});
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('catagory_id')->unsigned();
			$table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');
			$table->string('title')->default('');
			$table->text('description')->default('');
			$table->dateTime('start_date');
			$table->dateTime('end_date');
			$table->string('created_by')->default('');
			$table->string('modified_by')->default('');
			$table->string('status')->default('');
			$table->boolean('completed')->default(false);
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
        Schema::drop('tasks');

        Schema::drop('catagories');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function($table) {

		# make a Primary, Auto-Incrementing field.
		$table->increments('id');

		# generates `created_at` and `updated_at` columns
		$table->timestamps();

		# The rest of the fields...
		$table->string('school_name');
		$table->integer('counselor_id')->unsigned();
		$table->integer('built_year');
		$table->string('school_logo');
		$table->string('school_link');

		# Define foreign keys...
			$table->foreign('counselor_id')->references('id')->on('counselors');

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schools');
	}

}

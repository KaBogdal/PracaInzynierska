<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesisTable extends Migration {

	
	public function up()
	{
		Schema::create('thesis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject', 200);
			$table->timestamp('date');
			$table->text('descr');
			$table->bytea('docum');
			$table->integer('student_id');
			$table->integer('lecturer_id');
			$table->string('spec', 100)

			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('thesis');
	}

}

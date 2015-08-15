<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesesTable extends Migration {


	public function up()
	{
		Schema::create('theses', function(Blueprint $table){

		$table->increments('id');
		$table->string('subject', 200);
		$table->integer('date');
		$table->text('descr');
		$table->integer('level');
		$table->binary('docum')->nullable();
		$table->integer('student_id')->nullable();
		$table->integer('lecturer_id')->nullable();
		$table->string('spec', 100);
		$table->string('remember_token', 100)->nullable();
		$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('theses');
	}

}

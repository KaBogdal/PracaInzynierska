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
		$table->boolean('approval')->default(false);
		$table->integer('docum')->nullable();
		$table->string('fileName')->nullable();
		//docum 1 -> praca; docum 2-> promotor; docum 3->
		$table->integer('student_id')->nullable();
		$table->integer('lecturer_id')->nullable();
		$table->integer('reviewer')->nullable();
		$table->float('Lnote')->nullable();
		$table->float('RNote')->nullable();
		
		$table->integer('field_id')->unsigned()->nullable();
		$table->foreign('field_id')->references('id')->on('fields');
		
		//$table->string('spec', 10)->unsigned()->nullable();
		//$table->foreign('spec')->references('field')->on('fields');
		$table->string('remember_token', 100)->nullable();
		$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('theses');
	}

}

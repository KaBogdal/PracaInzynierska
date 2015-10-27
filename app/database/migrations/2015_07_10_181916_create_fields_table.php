<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration {

	public function up()
	{
		Schema::create('fields', function(Blueprint $table){
		
			$table->integer('id')->unique();

			$table->string('field', 10);
			$table->integer('level');
			
			//$table->integer('thesis_id')->unsigned()->nullable();
			//$table->foreign('thesis_id')->references('id')->on('theses');
			
			//$table->integer('user_id')->unsigned()->nullable();
			//$table->foreign('thesis_id')->references('id')->on('theses');
			
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('fields');
	}

}

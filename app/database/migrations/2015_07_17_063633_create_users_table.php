<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('users', function(Blueprint $table)
      {
          $table->increments('id');

          $table->string('name', 32);
          $table->string('username', 32);
          $table->string('email', 320);
          $table->string('password', 64);
		  $table->integer('access');
		  $table->integer('thesis_id')->unsigned();
		  $table->foreign('thesis_id')->references('id')->on('thesis');
          
          $table->string('remember_token', 100)->nullable();
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
      Schema::drop('users');
  }

}
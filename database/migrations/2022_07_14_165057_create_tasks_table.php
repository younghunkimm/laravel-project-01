<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
  public function up()
  {
    Schema::create('Task', function (Blueprint $table) {
      $table->increments('id');
      $table->text('memo');
      $table->text('creator_name');
      $table->integer('grp')->nullable();
      $table->integer('sort')->nullable();
      $table->integer('depth')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('Task');
  }
};

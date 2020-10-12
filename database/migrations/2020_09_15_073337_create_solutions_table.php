<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolutionsTable extends Migration
{
  
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('header')->nullable();
            $table->string('shortDescription')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            });
    }

  
    public function down()
    {
        Schema::drop('solutions');
    }
}

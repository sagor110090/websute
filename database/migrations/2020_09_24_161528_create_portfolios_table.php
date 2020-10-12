<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortfoliosTable extends Migration
{
  
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('project_name')->nullable();
            $table->string('porject_description')->nullable();
            $table->string('image')->nullable();
            });
    }

  
    public function down()
    {
        Schema::drop('portfolios');
    }
}

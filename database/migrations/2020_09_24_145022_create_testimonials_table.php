<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestimonialsTable extends Migration
{
  
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('text')->nullable();
            });
    }

  
    public function down()
    {
        Schema::drop('testimonials');
    }
}
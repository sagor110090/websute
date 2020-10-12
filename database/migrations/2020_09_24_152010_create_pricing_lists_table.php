<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePricingListsTable extends Migration
{
  
    public function up()
    {
        Schema::create('pricing_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('pricing_name')->nullable();
            $table->string('short_description')->nullable();
            $table->string('price')->nullable();
            });
    }

  
    public function down()
    {
        Schema::drop('pricing_lists');
    }
}
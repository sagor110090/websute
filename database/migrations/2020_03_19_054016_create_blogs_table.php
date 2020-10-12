<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogsTable extends Migration
{

    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('header')->nullable();
            $table->longText('shortDescription')->nullable();
            $table->longText('description')->nullable();
            $table->string('tag')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->integer('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('cascade')->onUpdate('cascade');
            });
    }


    public function down()
    {
        Schema::drop('blogs');
    }
}

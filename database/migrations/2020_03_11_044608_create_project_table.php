<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
            $table->string('slug');
            $table->string('header')->nullable;
            $table->longtext('description')->nullable;
            $table->string('client_name')->nullable;
            $table->string('location')->nullable;
            $table->string('year')->nullable;
            $table->string('value')->nullable;
            $table->string('link')->nullable;
            $table->string('thumbnail')->nullable();
            $table->string('image')->nullable();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('project');
    }
}

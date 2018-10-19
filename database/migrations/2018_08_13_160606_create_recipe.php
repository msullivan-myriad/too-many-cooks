<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('recipe', function (Blueprint $table) {
        $table->increments('id');
        $table->string('recipe_image');
        $table->string('title');
        $table->string('creator');
        $table->unsignedInteger('category_id')->nullable();
        $table->string('servings');
        $table->string('difficulty'); //What do you like to do when there is a defined array of options available (easy, medium, hard) to pick from
        $table->string('time');
        $table->text('ingredients');
        $table->text('directions');

        $table->foreign('category_id')->references('id')->on('category')->onDelete('set null');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('recipe');
    }
}

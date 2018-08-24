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
        $table->unsignedInteger('event_id');
        $table->string('recipe_image');
        $table->date('date');
        $table->string('title');
        $table->string('creator'); //The design has this as a text field, but it seems like it should just be assigned to the user creating it?
        $table->unsignedInteger('category_id');
        $table->string('servings');
        $table->string('difficulty'); //What do you like to do when there is a defined array of options availible (easy, medium, hard) to pick from
        $table->string('time');
        $table->text('ingredients');
        $table->text('directions');

        $table->foreign('event_id')->references('id')->on('event');
        $table->foreign('category_id')->references('id')->on('category');

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

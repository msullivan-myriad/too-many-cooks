<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRecipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_recipes', function (Blueprint $table) {
        $table->unsignedInteger('user_id');
        $table->unsignedInteger('recipe_id');
        $table->boolean('favorited');
        $table->boolean('createdBy');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('user_recipes');
    }
}

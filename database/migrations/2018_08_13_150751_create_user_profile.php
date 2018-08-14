<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_profile', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->string('profile_image');
        $table->string('name');
        $table->string('city');
        $table->string('state');
        $table->text('description'); //Is this field long enough to justify a text field or would you still use string here?
        $table->boolean('accepted_tos');
        $table->boolean('accepted_pp');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('user_profile');
    }
}

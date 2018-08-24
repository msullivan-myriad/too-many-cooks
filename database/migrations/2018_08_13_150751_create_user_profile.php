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
        $table->unsignedInteger('user_id');
        $table->string('profile_image');
        $table->string('name');
        $table->string('city');
        $table->string('state');
        $table->text('description');
        $table->boolean('accepted_terms_of_service');
        $table->boolean('accepted_privacy_policy');

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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

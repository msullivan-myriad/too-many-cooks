<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('event', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('user_id');
        $table->string('event_image');
        $table->date('date');
        $table->time('time');
        $table->string('location');
        $table->unsignedInteger('co_host')->nullable();
        $table->boolean('private');
        $table->unsignedInteger('space_capacity');
        //Not sure exactly how food items or categories relates to this based off of the designs and the FRD

        $table->foreign('user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('event');
    }
}

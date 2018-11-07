<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::create('events_users', function (Blueprint $table) {
        $table->unsignedInteger('user_id');
        $table->unsignedInteger('event_id');

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascades');
        $table->foreign('event_id')->references('id')->on('event')->onDelete('cascades');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('events_users');
    }
}

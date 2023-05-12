<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_room_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('class_room_id');
            $table->unsignedBigInteger('user_id');
            $table->unique(['class_room_id', 'user_id']);
            $table->foreign('class_room_id')->references('id')->on('class_rooms');
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
        Schema::dropIfExists('class_room_user');
    }
};

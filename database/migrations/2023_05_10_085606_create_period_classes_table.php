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
        Schema::create('period_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('class_room_id');
            $table->unsignedBigInteger('user_id'); //giang vien day buoi hoc
            $table->date('date');
            $table->string('document')->nullable();
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
        Schema::dropIfExists('period_classes');
    }
};

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
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedMediumInteger('courses_id');
            $table->string('name');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('shift_id');
            $table->tinyInteger('time_tyle');
            $table->string('total_period_class');
            $table->string('user_id'); // giao vien phu trach
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
        Schema::dropIfExists('class_rooms');
    }
};

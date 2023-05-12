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
        Schema::create('timesheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('period_class_id');
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('status');
            $table->time('time')->nullable(); //thoi gian xin ve som/ di muon
            $table->tinyInteger('onleave_type')->nullable();
            $table->string('reason')->nullable(); //chung 3 kieu
            $table->boolean('is_approve_onleave')->nullable();
            $table->string('denided_reason')->nullable();
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
        Schema::dropIfExists('timesheets');
    }
};

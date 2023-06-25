<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants_schedules', function (Blueprint $table) {
            $table->bigInteger('schedule_id');
            $table->bigInteger('consultant_id');
            $table->enum('day', [1,2,3,4,5,6,7]);
            $table->timestamps();
            $table->foreign('schedule_id')->references('schedule_id')->on('schedules')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('consultant_id')->references('id')->on('consultants')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['schedule_id', 'consultant_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultants_schedules');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->bigIncrements('day_id');
            $table->timeTz('start_time');
            $table->timeTz('end_time');
            $table->string('link')->nullable();
            $table->bigInteger('address_id')->nullable();
            $table->bigInteger('event_id');
            $table->timestamps();
            $table->foreign('address_id')->references('address_id')->on('addresses')->nullOnDelete();
            $table->foreign('event_id')->references('event_id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('days');
    }
}

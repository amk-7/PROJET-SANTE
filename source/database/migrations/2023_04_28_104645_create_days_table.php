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
            $table->date('date');
            $table->timeTz('start_time');
            $table->timeTz('end_time');
            $table->string('link')->nullable();
            $table->string("country")->nullable();
            $table->string("town")->nullable();
            $table->string("address")->nullable();
            $table->string("longitude")->nullable();
            $table->string("latitude")->nullable();
            $table->bigInteger('event_id');
            $table->timestamps();
            $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade')->onUpdate('cascade');
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

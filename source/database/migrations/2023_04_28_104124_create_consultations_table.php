<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->bigIncrements('consultation_id');
            $table->bigInteger('consultant_id');
            $table->bigInteger('patient_id');
            $table->date('date');
            $table->timeTz('start_time');
            $table->timeTz('end_time');
            $table->boolean('state'); // Si la consultation à été annulé ou pas.
            $table->boolean('do'); // Si la consultation à été faite ou pas.
            $table->timestamps();
            $table->foreign('consultant_id')->references('id')->on('consultants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('patient_id')->references('id_patients')->on('patients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultations');
    }
}

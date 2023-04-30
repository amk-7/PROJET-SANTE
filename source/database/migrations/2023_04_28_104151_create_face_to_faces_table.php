<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaceToFacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('face_to_faces', function (Blueprint $table) {
            $table->bigIncrements('face_to_face_id');
            $table->bigInteger('address');
            $table->bigInteger('consultation_id');
            $table->timestamps();
            $table->foreign('address')->references('address_id')->on('addresses')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('consultation_id')->references('consultation_id')->on('consultations')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('face_to_faces');
    }
}

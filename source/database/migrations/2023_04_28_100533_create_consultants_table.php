<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string('license_number');
            $table->string('medical_degree_file_path'); // diplôme
            $table->string('competences_attestation_file_path');
            $table->string('competences_certificate_file_path');
            $table->boolean('profile_confimed');
            $table->bigInteger('user_id');
            $table->bigInteger('tarif_id');
            $table->bigInteger('speciality_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('user_id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('tarif_id')->references('tarif_id')->on('tarifs')->nullOnDelete();
            $table->foreign('speciality_id')->references('speciality_id')->on('specialitys')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultants');
    }
}

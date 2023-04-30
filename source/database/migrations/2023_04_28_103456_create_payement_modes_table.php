<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayementModesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payement_modes', function (Blueprint $table) {
            $table->bigIncrements('payement_mode_id');
            $table->bigInteger('methode');//Mobile Money, stripe, paypal...
            $table->string('name');
            $table->string('phone_number_identification');
            $table->string('phone_number');
            $table->string('full_name_on_phone_number');
            $table->bigInteger('tarif_id');
            $table->timestamps();
            $table->foreign('tarif_id')->references('tarif_id')->on('tarifs')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payement_modes');
    }
}

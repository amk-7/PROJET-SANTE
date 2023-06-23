<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifs', function (Blueprint $table) {
            $table->bigIncrements('tarif_id');
            $table->float('montant')->unsigned();
            $table->bigInteger('unite_id');
            $table->bigInteger('currency_id');
            $table->timestamps();
            $table->foreign('unite_id')->references('unite_id')->on('unites');
            $table->foreign('currency_id')->references('currency_id')->on('currencys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifs');
    }
}

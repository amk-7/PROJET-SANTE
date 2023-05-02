<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancelationPolitiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelation_politiques', function (Blueprint $table) {
            $table->bigIncrements('cancelation_politique_id');
            $table->bigInteger('payement_mode_id');
            $table->bigInteger('administrator');
            $table->integer('number');
            $table->float('percentage')->unsigned();
            $table->timestamps();
            $table->foreign('payement_mode_id')->references('payement_mode_id')->on('payement_modes')->nullOnDelete();
            $table->foreign('administrator')->references('staff_id')->on('staffs')->cascadeOnDelete();
        });
        DB::statement('ALTER TABLE cancelation_politiques ADD CONSTRAINT check_percentage CHECK ( percentage <= 100  );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE cancelation_politiques DROP CONSTRAINT check_percentage;');
        Schema::dropIfExists('cancelation_politiques');
    }
}

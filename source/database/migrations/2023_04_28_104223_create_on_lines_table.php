<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('on_lines', function (Blueprint $table) {
            $table->bigInteger('on_line_id');
            $table->bigIncrements('consultation_id');
            $table->timestamps();
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
        Schema::dropIfExists('on_lines');
    }
}

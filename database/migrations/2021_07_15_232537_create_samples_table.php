<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->increments('sampleId');
            $table->string('sampleProductName', 100);
            $table->string('sampleEvaluateSchedule', 50);
            $table->integer('sampleQuantity');
            $table->string('sampleUnit', 50);
            $table->string('sampleShape', 100);
            $table->integer('samplePurchasePrice');
            $table->integer('sampleSellPrice');
            $table->integer('sampleAssesment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samples');
    }
}

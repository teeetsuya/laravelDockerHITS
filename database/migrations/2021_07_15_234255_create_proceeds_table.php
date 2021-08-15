<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProceedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceeds', function (Blueprint $table) {
            $table->increments('proceedsId');
            $table->date('proceedUpdateDate');
            $table->date('proceedUpdateSchedule');
            $table->string('proceedPerson');
            $table->date('proceedEstimatedMP');
            $table->string('proceedAccuracy');
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
        Schema::dropIfExists('proceeds');
    }
}
